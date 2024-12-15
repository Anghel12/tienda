<?php

namespace App\Models\Products;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    use HasFactory;

     // Relación con el usuario
     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
     // Relación con el producto
     public function product()
     {
         return $this->belongsTo(Product::class);
     }
}
