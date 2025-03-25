<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Models\Product;
use App\Http\Controllers\ShoppingCartController;

Route::get('/', [ProductController::class, 'index']);

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


Route::get('/cart/{slug}', [ProductController::class, 'show']);


Route::get('/address', function () {return view('address');});
Route::get('/payment', function () {return view('payment');});
Route::get('/shipping', function () {return view('shipping');});


Route::get('/product/{slug}', [ProductController::class, 'product']);


Route::get('/testing', function () {
    return view('testing');
});

Route::post('/add-to-cart', [ShoppingCartController::class, 'addToCart'])->middleware('auth');

//Route::post('/cart/{slug}', [OrderController::class, 'store']);





