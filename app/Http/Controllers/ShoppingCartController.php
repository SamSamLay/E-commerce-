<?php

namespace App\Http\Controllers;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartItem;
use App\Models\Product;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function addToCart(Request $request)
    {
        
        $cart = ShoppingCart::firstOrCreate(
            ['user_id' => auth()->id()]  // Check if there's an existing cart for this user
        );

        // Check if the product is already in the cart
        $cartItem = ShoppingCartItem::where('shopping_cart_id', $cart->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            // If the product already exists, increment the quantity
            $cartItem->increment('quantity');
        } else {
            // If the product does not exist in the cart, add it
            ShoppingCartItem::create([
                'shopping_cart_id' => $cart->id,
                'product_id' => $request->product_id,
                'quantity' => 1
            ]);
        }

        return view('welcome', [
            'products' => Product::all()
        ]);
    }
}
