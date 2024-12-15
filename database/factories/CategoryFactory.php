<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition()
    {
        // Definir las categorías fijas
        $categories = [
            'Motokares',
            'Aros',
            'Carros',
            'Moto lineal',
            'Accesorios',
            'Motos deportivas',
            'Motos clásicas',
            'Automóviles',
            'Repuestos',
            'Mantenimiento',
        ];

        // Generar todos los registros de categorías
        $category = $categories[array_search($this->faker->unique()->word, $categories) % count($categories)];

        return [
            'name' => $category,
            'slug' => Str::slug($category),
        ];
    }
}
