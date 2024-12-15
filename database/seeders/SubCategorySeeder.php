<?php

namespace Database\Seeders;

use App\Models\subCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Crear subcategorías con user_id = 1
SubCategory::create([
    'title' => 'Motokares', 
    'slug' => 'motokares', 
    'category_id' => 1, 
    'extract' => 'Motokares para motos', 
    'body' => 'Descripción de Motokares', 
    'orden' => 1, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'Motos deportivas', 
    'slug' => 'motos-deportivas', 
    'category_id' => 1, 
    'extract' => 'Motos deportivas de alto rendimiento', 
    'body' => 'Descripción de Motos deportivas', 
    'orden' => 2, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'Motos clásicas', 
    'slug' => 'motos-clasicas', 
    'category_id' => 1, 
    'extract' => 'Motos clásicas', 
    'body' => 'Descripción de Motos clásicas', 
    'orden' => 3, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'Repuestos de motos', 
    'slug' => 'repuestos-de-motos', 
    'category_id' => 9, 
    'extract' => 'Repuestos originales y genéricos', 
    'body' => 'Descripción de Repuestos de motos', 
    'orden' => 4, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'Accesorios de motos', 
    'slug' => 'accesorios-de-motos', 
    'category_id' => 5, 
    'extract' => 'Accesorios para personalizar motos', 
    'body' => 'Descripción de Accesorios de motos', 
    'orden' => 5, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'Laptops', 
    'slug' => 'laptops', 
    'category_id' => 11, 
    'extract' => 'Laptops de alta gama', 
    'body' => 'Descripción de Laptops', 
    'orden' => 6, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'PC de escritorio', 
    'slug' => 'pc-de-escritorio', 
    'category_id' => 11, 
    'extract' => 'PCs de escritorio para trabajo o juego', 
    'body' => 'Descripción de PC de escritorio', 
    'orden' => 7, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'Aires acondicionados', 
    'slug' => 'aires-acondicionados', 
    'category_id' => 12, 
    'extract' => 'Aires acondicionados para el hogar', 
    'body' => 'Descripción de Aires acondicionados', 
    'orden' => 8, 
    'status' => 1,
    'user_id' => 1
]);

SubCategory::create([
    'title' => 'Refrigeradores', 
    'slug' => 'refrigeradores', 
    'category_id' => 12, 
    'extract' => 'Refrigeradores modernos y eficientes', 
    'body' => 'Descripción de Refrigeradores', 
    'orden' => 9, 
    'status' => 1,
    'user_id' => 1
]);

    }
}
