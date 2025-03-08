<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\Order;//order not found

class OrderItemController extends Controller
{
    public function store()
    {
        //dd(request('totalPrice'));
        request()->validate([
           'totalPrice' => 'required|numeric',
       ]);

    

        // Create the OrderItem with the passed or default quantity  'body'=>
        Order::create([
            'total_price' => request('totalPrice'), 
            'user_id' => 1, // Example: hardcoded to 1 for now
            'payment_id'=>1,
            'status'=>'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        dd('success');
        

        // Redirect after storing the order item
        return redirect('/testing');
    }
}
