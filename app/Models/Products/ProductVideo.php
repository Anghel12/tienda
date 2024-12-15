<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVideo extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'product_id',   // Relación con el producto
        'url',          // URL del video
        'duration',     // Duración del video
        'resolution',   // Resolución del video
    ];

    // Relación polimórfica con el modelo 'Product' (u otros modelos si es necesario)
    public function videoable()
    {
        return $this->morphTo();
    }
}
