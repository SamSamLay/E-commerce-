<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {return view('welcome');});

//->middleware('guest') register login
Route::get('/register',[AuthController::class,'create'])->middleware('guest');
Route::post('/register',[AuthController::class,'store'])->middleware('guest');

Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'post_login'])->name('post_login')->middleware('guest');


Route::get('/cart', function () {
    if (auth()->guest()) {
        return redirect('/register');
    }
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





