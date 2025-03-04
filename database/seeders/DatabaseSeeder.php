<?php

namespace Database\Seeders;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\ShoppingCartItem;
use App\Models\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        User::factory(10)->create();
        Category::factory(5)->create();
        Brand::factory(3)->create();
        Supplier::factory(3)->create();
        Product::factory(20)->create();

        //Payment
        User::all()->each(function ($user){
            Payment::factory()->create(['user_id'=>$user->id]);
        });

        //Shopping Carts
        User::all()->each(function ($user){
            ShoppingCart::factory()->create(['user_id'=>$user->id]);
        });

        //Shopping Carts Items
        ShoppingCart::all()->each(function ($cart){
            ShoppingCartItem::factory()->create(['shopping_cart_id'=>$cart->id]);
        });

        //Order
        User::all()->each(function ($user){
           Order::factory()->create(['user_id'=>$user->id]);
        });

        //Order Item
        Order::all()->each(function ($order){
            OrderItem::factory()->create(['order_id'=>$order->id]);
        });

    }
}
