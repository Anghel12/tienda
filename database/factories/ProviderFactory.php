<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {  $title = $this->faker->unique()->sentence();

        return [
          
            'title' => $title,
                 'slug' => Str::slug($title),
                 'extract' => $this->faker->text(20),
                 'phone' => $this->faker->randomDigitNot(400),
                 'user_id' => 1,
        ];
    }
}
