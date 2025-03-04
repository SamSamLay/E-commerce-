<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;


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

Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');

Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'])->middleware('guest');





