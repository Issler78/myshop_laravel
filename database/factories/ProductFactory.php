<?php

namespace Database\Factories;

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
            'name' => fake()->sentence(15), 
            'description' => fake()->sentence(50), 
            'distributor' => fake()->cnpj(), 
            'price' => fake()->randomFloat(2, 5, 500), 
            'stock' => fake()->numberBetween(0, 350)
        ];
    }
}
