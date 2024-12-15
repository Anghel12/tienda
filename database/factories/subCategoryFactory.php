<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subCategory>
 */
class subCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Lista de subcategorías predefinidas para cada categoría
        $subcategories = [
            // Subcategorías de motos
            'Motokares', 'Motos deportivas', 'Motos clásicas', 'Mantenimiento de motos', 'Repuestos de motos',
            
            // Subcategorías de computadoras
            'Laptops', 'PC de escritorio', 'Accesorios para computadoras', 'Componentes de computadoras', 'Sistemas operativos',

            // Subcategorías de electrodomésticos
            'Refrigeradores', 'Lavadoras', 'Microondas', 'Cocinas', 'Aires acondicionados',

            // Subcategorías de eCommerce
            'Electrónica', 'Ropa y accesorios', 'Calzado', 'Juguetes', 'Hogar y jardín',
        ];

        $subcategory = $subcategories[array_rand($subcategories)]; // Seleccionar una subcategoría aleatoria

        return [
            'title' => $subcategory,
            'slug' => Str::slug($subcategory),
            'extract' => $this->faker->text(20),
            'body' => $this->faker->text(500),
            'orden' => $this->faker->randomNumber(2),
            'status' => $this->faker->randomElement([1, 2]), // 1 o 2 puede ser 'activo' o 'inactivo'
            'user_id' => 1, // Asocia la subcategoría con un usuario aleatorio
            'category_id' => Category::all()->random()->id, // Asocia la subcategoría con una categoría aleatoria
        ];
    }
}
