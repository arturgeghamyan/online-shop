<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Products;
use App\Models\ProductPhoto;
use App\Models\Cart;
use App\Models\WishList;
use App\Models\Orders;
use App\Models\OrderDetalis;
use Validator;
use Redirect;
use Session;
use Stripe\Product;

class ProductController extends Controller
{
	public function HomePage()
	{
		$products = Products::where('user_id', '!=', Session::get('id'))->with('photo')->get();
		return view("home")->with("products", $products);
	}
	public function AddProducts()
	{
		$category = Category::get();
		return view("addproduct")->with("cat", $category);
	}
	public function Append(Request $r)
	{
		$validator = Validator::make($r->all(), [
			"name" => "required|min:2|max:20|string",
			"count" => "required|gt:0|integer",
			"price" => "required|integer",
			"discription" => "required|string",
			"category" => "required",

		]);
		if ($validator->fails()) {
			Session::flash("addproduct-error", true);
			return Redirect::to("/product/add")
				->withErrors($validator)
				->withInput();
		} else {
			$product = new Products;
			$product->name = $r->name;
			$product->count = $r->count;
			$product->price = $r->price;
			$product->discription = $r->discription;
			$product->user_id = Session::get('id');
			$product->category_id = $r->category;
			$product->save();
			if ($r->hasfile('photo')) {
				foreach ($r->file('photo') as $image) {
					$name = time() . $image->getClientOriginalName();
					$image->move(public_path() . '/img/product/', $name);
					$photo = new ProductPhoto;
					$photo->product_id = $product->id;
					$photo->address = $name;
					$photo->save();
				}
			}
			Session::flash('success', "Product is successfuly added");
			return Redirect::to("/product/add");
		}
	}
	function Single($id)
	{
		$product = Products::where('id', $id)->with('photo')->first();
		$id = Session::get("id");
		return view("single-product")->with("product", $product)->with("id", $id);
	}
	function Shop()
	{
		$products = Products::where('user_id', '!=', Session::get('id'))->with('photo')->get();
		return view("shop")->with("products", $products);
	}

	function myProduct()
	{
		$products = Products::where('user_id', Session::get('id'))->with('photo')->get();
		return view("my-products")->with("products", $products);
	}

	function DeleteProduct(Request $r)
	{
		$id = $r->id;
		Products::where("id", $id)->delete();
	}

	function EditProduct(Request $r)
	{
		$id = $r->id;
		$name = $r->name;
		$count = $r->count;
		$price = $r->price;
		$discription = $r->discription;
		Products::where("id", $id)->update(['name' => $name, 'count' => $count, 'price' => $price, 'discription' => $discription]);
	}

	function CartPage()
	{
		$carts = Cart::where('user_id', Session::get('id'))->with('product')->get();
		if ($carts->count() < 1) {
			$totalPrices = 0;
		}
		foreach ($carts as $cart) {
			$totalPrices[] = $cart['count'] * $cart['product']['price'];
		}
		return view("cart")->with(["carts" => $carts, "totalPrices" => $totalPrices]);
	}

	function WishListPage()
	{
		$wishlist = WishList::where('user_id', Session::get('id'))->with('product')->get();
		return view("wishlist")->with("wishlist", $wishlist);
	}

	function OrderPage()
	{
		$orders = Orders::where("user_id", Session::get('id'))->get();
		return view("order")->with("orders", $orders);
	}

	function OrderDetailsPage($id)
	{
		$order_details = OrderDetalis::where('order_id', $id)->with("product")->get();
		return view("order-details")->with("order_details", $order_details);
	}

	function AddCart(Request $r)
	{
		$prod_id = $r->id;
		$user_id = Session::get('id');
		$count = $r->count;
		if ($count == 0) {
			$count = 1;
		}
		if (!Cart::where('product_id', $prod_id)->where('user_id', $user_id)->first()) {
			Cart::insert(['count' => $count, 'user_id' => $user_id, 'product_id' => $prod_id]);
		} else {
			Cart::where('product_id', $prod_id)->update(['count' => $count, 'user_id' => $user_id, 'product_id' => $prod_id]);
		}
	}
	function AddWishList(Request $r)
	{
		$prod_id = $r->id;
		$user_id = Session::get('id');
		if (!WishList::where('product_id', $prod_id)->where('user_id', $user_id)->first()) {
			WishList::insert(['user_id' => $user_id, 'product_id' => $prod_id]);
		} else {
			WishList::where('product_id', $prod_id)->update(['user_id' => $user_id, 'product_id' => $prod_id]);
		}
	}
	function ShowWishList()
	{
		$user_id = Session::get('id');
		$wishlist = WishList::where('user_id', $user_id)->with('product')->get();
		print($wishlist);
	}
	function ShowCart()
	{
		$user_id = Session::get('id');
		$cart = Cart::where('user_id', $user_id)->with('product')->get();
		print($cart);
	}
	function DeleteCart(Request $r)
	{
		$id = $r->id;
		Cart::where('product_id', $id)->delete();
	}
	function DeleteWishList(Request $r)
	{
		$id = $r->id;
		WishList::where('product_id', $id)->delete();
	}

	function CountUp(Request $r)
	{
		$id = $r->id;
		$count = $r->count;
		Cart::where('product_id', $id)->update(['count' => $count]);
		print($id);
	}
	function CountDown(Request $r)
	{
		$id = $r->id;
		$count = $r->count;
		Cart::where('product_id', $id)->update(['count' => $count]);
		print($id);
	}
}
