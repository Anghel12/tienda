<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Lista de marcas predefinidas
        $brands = [
            'Honda',
            'Wanxin',
            'Zhonghen',
            'Linked',
            'Yamaha',
            'Suzuki',
            'Kawasaki',
            'BMW',
            'Harley Davidson',
            'KTM',
        ];

        // Escoge una marca de la lista
        $brand = $brands[array_rand($brands)];

        return [
            'title' => $brand,
            'slug' => Str::slug($brand),
            'extract' => 'Extracto de ' . $brand,
            'user_id' => 1, // Asumiendo que el usuario existe
        ];
    }
}

/* if (!$user) {
    $user = User::create([
        'name' => 'Anghel',
        'email' => 'angheluisg2@gmail.com',
        'password' => bcrypt('Anghel2023'),
        'referral_code' => Str::random(10),
       
    ])->syncRoles('Admin');
} */