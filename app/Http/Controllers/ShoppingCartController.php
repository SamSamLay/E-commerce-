<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function store(){
        ShoppingCart::create([
            'total_price' => request('totalPrice'), 
            'user_id' => auth()->id(), // Example: hardcoded to 1 for now
            'payment_id'=>1,
            'status'=>'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
