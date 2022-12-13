<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "UserController@LoginPage");
Route::post('/login', "UserController@Login");
Route::get('/logout', "UserController@logout");
Route::get('/register', "UserController@RegisterPage");
Route::post('/registration', "UserController@Registraton");



Route::get('/my-account', "UserController@myAccount");

Route::get('/user/activate/{id}/{hash}', "UserController@activate");

Route::get('/product/add', "ProductController@AddProducts");
Route::post('/add/product', "ProductController@Append");

Route::get('/product/home', "ProductController@HomePage");
Route::get('/product/cart', "ProductController@CartPage")->middleware("isloggedin");
Route::get('/product/wishlist', "ProductController@WishListPage")->middleware("isloggedin");
Route::get('/product/order', "ProductController@OrderPage")->middleware("isloggedin");
Route::get('/product/order/details{id}', "ProductController@OrderDetailsPage")->middleware("isloggedin");
Route::get('/product/single/{id}', "ProductController@Single")->middleware("isloggedin");
Route::get('/product/my-product', "ProductController@myProduct")->middleware("isloggedin");
Route::get('/product/shop', "ProductController@Shop");

Route::post('/delete/product', "ProductController@DeleteProduct");
Route::post('/edit/product', "ProductController@EditProduct");


// Route::post('/count/up', "ProductController@CountUp");
// Route::post('/count/down', "ProductController@CountDown");

Route::prefix('/count')->group(function () {
    Route::post('/up', "ProductController@CountUp");
    Route::post('/down', "ProductController@CountDown");
});



Route::post('/add_cart', "ProductController@AddCart");
Route::post('/add_wishlist', "ProductController@AddWishList");

Route::post('/show_cart', "ProductController@ShowCart");
Route::post('/show_wishlist', "ProductController@ShowWishList");

Route::post('/delete/cart', "ProductController@DeleteCart");
Route::post('/delete/wishlist', "ProductController@DeleteWishList");



Route::get('/password/recover', "UserController@PasswordRecover");
Route::post('/send/code', "UserController@SendCode");
Route::post('/recover', "UserController@Recover");
Route::post('/change/password', "UserController@ChangePassword");



Route::get('/pay/order', "PaymentController@OrderComplite");
Route::post('/transaction', "PaymentController@makePayment")->name('make-payment');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
