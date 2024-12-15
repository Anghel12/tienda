<?php

namespace App\Models;

use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    /* que nos retorne el slug por url y no el id  */
    public function getRouteKeyName()
    {
      return "slug";
    }
       // Definir la relación uno a muchos con el modelo Product
       public function products()
       {
           return $this->hasMany(Product::class);
       }
       
       
     //category relacion uno a muchos
     public function sub_categories(){
      return $this->hasMany(subCategory::class);
   }

     //category relacion uno a muchos post
     public function posts(){
        return $this->hasMany(Post::class);
     }

     //category relacion uno a muchos postyoutube
     public function postyoutube(){
      return $this->hasMany(postyoutube::class);
   }

   
}
