<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Orders;
use App\Models\OrderDetalis;

use Stripe;
use Session;
use Redirect;

class PaymentController extends Controller
{

    public function OrderComplite()
    {
        $carts = Cart::where('user_id', Session::get('id'))->with('product')->get();
        $price = 0;
        foreach ($carts as $cart) {
            $price += $cart->product->price * $cart->count;
        }
        if ($price > 0) {
            return view('order-complite')
                ->with('totalprice', $price);
        } else {
            return view('cart')
                ->with('error', 'Your cart is empty. Nothing to pay!')
                ->with('totalprice', 0);
        }
    }

    public function makePayment(Request $request)
    {
        $carts = Cart::where('user_id', Session::get('id'))->with('product')->get();
        $price = 0;
        foreach ($carts as $cart) {
            $price += $cart->product->price * $cart->count;
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => $price * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Make payment and chill."
        ]);

        Session::flash('success', 'Payment successfully made.');

        $order = new Orders;
        $order->user_id = Session::get("id");
        $order->total = $price;
        $order->save();

        foreach ($carts as $product) {
            $order_details = new OrderDetalis;
            $order_details->order_id = $order->id;
            $order_details->product_id = $product->product_id;
            $order_details->count = $product->count;
            $order_details->save();
        }
        $cart = [];
        Cart::where("user_id", Session::get("id"))->delete();
        return Redirect::to("/product/cart");
    }
}
