<?php

namespace Database\Seeders;

use App\Models\Home\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'title' => 'Paquete de ejemplo',
            'subtitle' => 'Subtítulo del paquete de ejemplo',
            'body' => 'Este es el cuerpo del paquete de ejemplo.',

           
        ]);

    }
}
