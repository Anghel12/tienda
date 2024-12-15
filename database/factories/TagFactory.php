<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Lista de tags predefinidos para motos, computadoras, electrodomésticos y eCommerce
        $tags = [
            'Moto',
            'Moto deportiva',
            'Accesorios moto',
            'Repuestos moto',
            'Motor',
            'Tecnología',
            'Computadoras',
            'Laptops',
            'Electrodomésticos',
            'Electrónica',
            'Gadgets',
            'Ofertas',
            'Promociones',
            'Nuevos productos',
            'Ecommerce',
            'Compra online',
            'Envíos gratis',
            'Descuentos',
            'Venta rápida',
            'Mercado',
        ];

        // Escoge un tag de la lista
        $tag = $tags[array_rand($tags)];

        return [
            'name' => $tag,
            'slug' => Str::slug($tag),
            'color' => $this->faker->randomElement(['red', 'blue', 'yellow']),
        ];
    }
}
