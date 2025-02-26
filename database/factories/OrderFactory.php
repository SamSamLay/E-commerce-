<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Payment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'total_price'=>fake()->randomFloat(2,20,500),
            'status'=>fake()->randomElement(['Pending','Completed','Cancelled']),
            'payment_id'=>Payment::factory(),
        ];
    }
}
