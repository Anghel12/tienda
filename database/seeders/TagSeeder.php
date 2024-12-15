<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear tags manualmente
        Tag::create(['name' => 'Motocross', 'slug' => 'motocross', 'color' => 'red']);
        Tag::create(['name' => 'Repuestos', 'slug' => 'repuestos', 'color' => 'blue']);
        Tag::create(['name' => 'Mantenimiento', 'slug' => 'mantenimiento', 'color' => 'green']);
        Tag::create(['name' => 'Tecnología', 'slug' => 'tecnologia', 'color' => 'yellow']);
        Tag::create(['name' => 'Electrónica', 'slug' => 'electronica', 'color' => 'purple']);
        Tag::create(['name' => 'Gaming', 'slug' => 'gaming', 'color' => 'pink']);
        Tag::create(['name' => 'Aire acondicionado', 'slug' => 'aire-acondicionado', 'color' => 'orange']);
        Tag::create(['name' => 'Hogar', 'slug' => 'hogar', 'color' => 'gray']);
    }
}
