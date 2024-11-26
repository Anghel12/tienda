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
        // \App\Models\User::factory(10)->create();

        /* ELIMINAR LAS IMAGENS DE LA CARPETA PUBLIC/STORAGE/POSTS */
       Storage::deleteDirectory('public/posts');
       Storage::makeDirectory('public/posts');
       
          /* CREACION DE LOS  */
        
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(MembershipTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ServicesTableSeeder::class);

        Brand::factory(20)->create();
        Provider::factory(2)->create();
        navbarConfig::factory(1)->create(); 
        Coin::factory(1)->create();
        Category::factory(14)->create();
        Tag::factory(8)->create();
        subCategory::factory(12)->create();
        
        Address::factory(18)->create();
        Profile::factory(20)->create();
        UserCoin::factory()->count(20)->create();
        PaymentMethod::factory(3)->create();
        Review::factory(10)->create();

       // UserParent::factory(50)->create();
    /** RELACION POLIMORFICA * */
     /*    $this->call(PostSeeder::class);
        $this->call(PostYoutubeSeeder::class); */
    /*     $this->call(videoSeeder::class); */
       /*  $this->call(ConfiguracionSeed::class); */
    }
}
