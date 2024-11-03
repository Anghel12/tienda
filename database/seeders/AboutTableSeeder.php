<?php

namespace Database\Seeders;

use App\Models\Home\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        About::create([
            'title' => 'About Us',
            'subtitle' => 'Our Story',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat.',
            'miembro' => 100000,
           
        ]);
    }
}
