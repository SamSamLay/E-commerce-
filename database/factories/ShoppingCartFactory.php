<?php

namespace Database\Factories;
use App\Models\ShoppingCart;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShoppingCart>
 */
class ShoppingCartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ShoppingCart::class;
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
        ];
    }
}
