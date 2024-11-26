<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

      //relacion uno a muchos polimorfica

      public function user()
      {
          return $this->belongsTo(User::class);
      }

      public function coins()
      {
          return $this->belongsToMany(Coin::class, 'user_coins')->withPivot('balance');
      }
      
}
