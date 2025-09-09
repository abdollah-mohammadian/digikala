<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name'            => fake()->name(),
            'brand_id'        => Brand::factory(),
            'price'           => fake()->numberBetween(100, 100000),
            'primary_image'   => null,
            'quantity'        => fake()->numberBetween(10, 100),
            'description'     => fake()->paragraph(),
            'delivery_amount' => fake()->numberBetween(100, 1000)
        ];
    }
}
