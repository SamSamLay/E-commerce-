<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        //$products = Product::with(['category','brand','supplier','orderItems'])->get();
        $products = Product::all();
        foreach ($products as $product) {
            // Here we get the image path from the database and prepend the image directory path
            $product->image = 'storage/images/' . $product->image;
        }
        return view('testing', compact('products')); // Load testing.blade.php
     
    }
}
