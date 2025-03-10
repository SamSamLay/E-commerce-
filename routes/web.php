<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/address', function () {
    return view('address');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/shipping', function () {
    return view('shipping');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/navbar', function () {
    return view('components.navbar');
});
//->middleware('guest') register login
Route::get('/register',[AuthController::class,'create']);
Route::post('/register',[AuthController::class,'store']);

Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'post_login'])->name('post_login');

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/address', function () {
    return view('address');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/shipping', function () {
    return view('shipping');
});
Route::get('/product', function () {
    return view('product');
});

//testing
Route::get('/testing', function () {
    return view('testing');
});

Route::post('/testing/order', [OrderController::class, 'store']);





