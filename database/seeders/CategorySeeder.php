<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear las categorías
        Category::create(['name' => 'Motokares', 'slug' => 'motokares']);
        Category::create(['name' => 'Aros', 'slug' => 'aros']);
        Category::create(['name' => 'Carros', 'slug' => 'carros']);
        Category::create(['name' => 'Moto lineal', 'slug' => 'moto-lineal']);
        Category::create(['name' => 'Accesorios', 'slug' => 'accesorios']);
        Category::create(['name' => 'Motos deportivas', 'slug' => 'motos-deportivas']);
        Category::create(['name' => 'Motos clásicas', 'slug' => 'motos-clasicas']);
        Category::create(['name' => 'Automóviles', 'slug' => 'automoviles']);
        Category::create(['name' => 'Repuestos', 'slug' => 'repuestos']);
        Category::create(['name' => 'Mantenimiento de motos', 'slug' => 'mantenimiento-motos']);
        Category::create(['name' => 'Computadoras', 'slug' => 'computadoras']);
        Category::create(['name' => 'Electrodomésticos', 'slug' => 'electrodomesticos']);
        Category::create(['name' => 'Ropa y accesorios', 'slug' => 'ropa-accesorios']);
        Category::create(['name' => 'Hogar y jardín', 'slug' => 'hogar-jardin']);
    }
}
