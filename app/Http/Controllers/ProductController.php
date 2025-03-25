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

    public function product($slug) {
        $product = Product::where('name', $slug)->firstOrFail();
        return view('product', compact('product'));
    }
    

     public function show($slug)
{
    $product = Product::where('name', $slug)->firstOrFail(); // fetch by slug
    //return view('cart', compact('product'));//pass the product with compact
    return view('cart')->with('product', $product);

}

//Add to cart
public function store()
{
    //dd(request('totalPrice'));
//     request()->validate([
//        'totalPrice' => 'required|numeric',
//    ]);



    // Create the OrderItem with the passed or default quantity  'body'=>
    Order::create([
        'total_price' => request('totalPrice'), 
        'user_id' => auth()->id(), // Example: hardcoded to 1 for now
        'payment_id'=>1,
        'status'=>'pending',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    //dd('success');
    

    // Redirect after storing the order item
    return redirect('/');
}

     
   


    // Retrieving products where the image column contains 'syltherine'
    // $products = Product::where('image', 'LIKE', '%syltherine%')
    //     ->get();

    // return view('testing', compact('products'));

}
