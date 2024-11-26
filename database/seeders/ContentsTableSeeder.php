<?php

namespace Database\Seeders;

use App\Models\Home\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Content::create([
            'title' => 'BIENVENIDOS A TERRA BANK UNIVERSAL',
            'subtitle' => 'Primer fondo de alta rentabilidad.',
            'body' => 'Nuestro territorio es este Planeta Tierra en su conjunto, y todos los habitantes serán beneficiados de gran manera.',
 
        ]);


    }
}
