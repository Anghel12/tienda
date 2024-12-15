<?php

namespace Database\Factories;

use App\Models\Products\Product;
use App\Models\Products\ProductMedia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductMedia>
 */
class ProductMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductMedia::class;

    public function definition()
    {
        $images = [
            'https://i.imgur.com/B0lJAAT.jpeg',
            'https://i.imgur.com/TjjOCgC.jpeg',
            'https://i.imgur.com/5iz68om.jpeg',
            'https://i.imgur.com/iGpZ4B7.jpeg',
            'https://i.imgur.com/xM9bJuq.jpeg',
            'https://i.imgur.com/V1lKGCS.jpeg',
        ];

        return [
            'product_id' => Product::all()->random()->id,
            'type' => 'image',
            'url' => $this->faker->randomElement($images), // Usando las imágenes de ejemplo
        ];
    }
}
