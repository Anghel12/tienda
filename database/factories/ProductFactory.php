<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
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
    public function definition()
    { 
        return [
            'name' => 'Producto ' . $this->faker->word(), // Esto genera un nombre aleatorio
            'slug' => $this->faker->slug(),
            'extract' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'category_id' => Category::inRandomOrder()->first()->id, // Toma una categoría aleatoria
            'brand_id' => Brand::inRandomOrder()->first()->id, // Toma una marca aleatoria
            'seller_id' => User::inRandomOrder()->first()->id, // Toma un usuario aleatorio como vendedor
            'stock' => $this->faker->numberBetween(1, 100), // Stock aleatorio
            'status' => $this->faker->randomElement(['active', 'inactive']), // Estado aleatorio
        ];

    }
}
