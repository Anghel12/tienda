<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', // Relación con el producto
        'url',        // URL de la imagen
        'is_main',    // Si la imagen es la principal
        'position',   // Posición en la galería
        'height',     // Altura de la imagen
    ];

      public function imageable(){
        return $this->morphTo();
    }


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
