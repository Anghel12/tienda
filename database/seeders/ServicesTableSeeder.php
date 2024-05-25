<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicesData = [
            [
                'title' => 'Servicio 1',
                'subtitle' => 'Subtítulo del servicio 1',
                'body' => 'Este es el cuerpo del servicio 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Servicio 2',
                'subtitle' => 'Subtítulo del servicio 2',
                'body' => 'Este es el cuerpo del servicio 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Servicio 3',
                'subtitle' => 'Subtítulo del servicio 3',
                'body' => 'Este es el cuerpo del servicio 3.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Servicio 4',
                'subtitle' => 'Subtítulo del servicio 4',
                'body' => 'Este es el cuerpo del servicio 4.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('services')->insert($servicesData);
    }
}
