<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear marcas y asignar el user_id
        Brand::create(['title' => 'Honda', 'slug' => 'honda', 'user_id' => 1]);
        Brand::create(['title' => 'Wanxin', 'slug' => 'wanxin', 'user_id' => 1]);
        Brand::create(['title' => 'Zhonghen', 'slug' => 'zhonghen', 'user_id' => 1]);
        Brand::create(['title' => 'Linked', 'slug' => 'linked', 'user_id' => 1]);
        Brand::create(['title' => 'Yamaha', 'slug' => 'yamaha', 'user_id' => 1]);
        Brand::create(['title' => 'Kawasaki', 'slug' => 'kawasaki', 'user_id' => 1]);
        Brand::create(['title' => 'Suzuki', 'slug' => 'suzuki', 'user_id' => 1]);
        Brand::create(['title' => 'BMW', 'slug' => 'bmw', 'user_id' => 1]);
        Brand::create(['title' => 'Ducati', 'slug' => 'ducati', 'user_id' => 1]);
        Brand::create(['title' => 'Harley-Davidson', 'slug' => 'harley-davidson', 'user_id' => 1]);
        Brand::create(['title' => 'Samsung', 'slug' => 'samsung', 'user_id' => 1]);
        Brand::create(['title' => 'Apple', 'slug' => 'apple', 'user_id' => 1]);
        Brand::create(['title' => 'Dell', 'slug' => 'dell', 'user_id' => 1]);
        Brand::create(['title' => 'HP', 'slug' => 'hp', 'user_id' => 1]);
        Brand::create(['title' => 'Lenovo', 'slug' => 'lenovo', 'user_id' => 1]);
        Brand::create(['title' => 'Acer', 'slug' => 'acer', 'user_id' => 1]);
        Brand::create(['title' => 'LG', 'slug' => 'lg', 'user_id' => 1]);
        Brand::create(['title' => 'Sony', 'slug' => 'sony', 'user_id' => 1]);
        Brand::create(['title' => 'Whirlpool', 'slug' => 'whirlpool', 'user_id' => 1]);
        Brand::create(['title' => 'Bosch', 'slug' => 'bosch', 'user_id' => 1]);
    }
    
}
