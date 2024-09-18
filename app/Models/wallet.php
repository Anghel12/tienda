<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    use HasFactory;

       // Añade los campos que se pueden asignar masivamente
       protected $fillable = ['name', 'currency', 'balance', 'type', 'is_active', 'user_id'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }


}
