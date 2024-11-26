<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavCount extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'friend_id', 'description'];

    // Relación con el usuario que crea el favorito
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con el usuario marcado como favorito
    public function friend()
    {
        return $this->belongsTo(User::class, 'friend_id');
    }
}
