<?php

namespace Database\Factories;

use App\Models\ShoppingCart;
use App\Models\Product;
use App\Models\ShoppingCartItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShoppingCartItem>
 */
class ShoppingCartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = ShoppingCartItem::class;
    public function definition(): array
    {
        return [
            'shopping_cart_id'=>ShoppingCart::inRandomOrder()->first() ?? ShoppingCart::factory(),
            'product_id'=>Product::factory(),
            'quantity'=>fake()->numberBetween(1,5),
        ];
    }
}
