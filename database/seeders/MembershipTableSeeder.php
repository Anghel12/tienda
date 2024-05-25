<?php

namespace Database\Seeders;

use App\Models\Home\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Membership::create([
            'title' => 'Membresía básica',
            'body' => 'Esta es la membresía básica.',
            'subtitle' => 'Subtítulo de la membresía básica',
            'sub_body' => 'Este es el cuerpo del subtítulo de la membresía básica.',
            'price_title' => 'Precio mensual', // Agregado el título del precio
            'price' => 29.99, // Agregado el precio
            'offer' => 'Oferta especial para nuevos miembros', // Agregada la oferta

           
        ]);

    }
}
