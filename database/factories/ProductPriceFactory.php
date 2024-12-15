<?php

namespace Database\Factories;

use App\Models\Products\Product;
use App\Models\Products\ProductPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductPrice>
 */
class ProductPriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductPrice::class;

    public function definition()
    {
        $price = $this->faker->randomFloat(2, 10, 100); // Precio base
        $discount = $this->faker->randomFloat(2, 0, $price); // Descuento

        return [
            'product_id' => Product::all()->random()->id,
            'price' => $price,
            'discount' => $discount,
            'price_reciente' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
