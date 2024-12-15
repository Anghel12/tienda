<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\Admin\Home\PackageController;
use App\Models\Address;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Coin;
use App\Models\home\AboutUsHome;
use App\Models\Tag;
use App\Models\navbarConfig;
use App\Models\PaymentMethod;
use App\Models\Profile;
use App\Models\Provider;
use App\Models\Review;
use App\Models\subCategory;
use App\Models\UserCoin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Limpiar directorios
        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');
    
        // Llamar a los seeders específicos
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ContentsTableSeeder::class,
            PackageTableSeeder::class,
            MembershipTableSeeder::class,
            AboutTableSeeder::class,
            ServicesTableSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            BrandSeeder::class,
            SubCategorySeeder::class,
            ProductSeeder::class,
        ]);

       /*  Provider::factory(2)->create(); 
        Address::factory(18)->create();
        Profile::factory(20)->create();
        PaymentMethod::factory(3)->create();
        UserCoin::factory(20)->create();
        Review::factory(10)->create();*/
    }
    
}
