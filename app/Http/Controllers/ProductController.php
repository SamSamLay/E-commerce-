<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index() {
        
        return view('welcome',[

             'products' => Product::all()
        ]);
     }
     public function show($slug)
{
    $product = Product::where('name', $slug)->firstOrFail(); // fetch by slug
    //return view('cart', compact('product'));//pass the product with compact
    return view('cart')->with('product', $product);

}

     
   


    // Retrieving products where the image column contains 'syltherine'
    // $products = Product::where('image', 'LIKE', '%syltherine%')
    //     ->get();

    // return view('testing', compact('products'));

}
