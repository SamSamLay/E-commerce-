<?php

use Illuminate\Support\Facades\Route;

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




