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
   


    // Retrieving products where the image column contains 'syltherine'
    // $products = Product::where('image', 'LIKE', '%syltherine%')
    //     ->get();

    // return view('testing', compact('products'));

}
