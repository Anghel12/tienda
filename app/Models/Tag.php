<?php

namespace App\Models;

use App\Models\Products\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'color'];

    /* que nos retorne el slug por url y no el id  */
/*     public function getRouteKeyName()
    {
      return "slug";
    } */

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tag');
    }


     //relacion muchos a muchos inversa POSTS
     public function posts(){
        return $this->belongsToMany(Post::class);
    }

    
     //relacion muchos a muchos inversa POSTYOUTUBE
     public function postyoutube(){
        return $this->belongsToMany(PostYoutube::class);
    }
     //relacion uno a uno polimorfica

    public function image(){
        return $this->morphone(Image::class, 'imageable');
        }
}
