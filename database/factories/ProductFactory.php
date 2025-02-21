<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Supplier;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name'=>fake()->word(),
            'description'=>fake()->sentence(),
            'price'=>fake()=>randomFloat(2,5,100),
            'category_id'=>Category::factory(),
            'brand_id'=>Brand::factory(),
            'supplier_id'=>Supplier::factory(),
        ];
    }
}
