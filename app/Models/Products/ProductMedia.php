<?php

namespace App\Models\Products;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    

    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'product_media';
    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'product_id', // Relación con el producto
        'url',        // URL de la imagen
        'is_main',    // Si la imagen es la principal
        'position',   // Posición en la galería
        'height',     // Altura de la imagen
    ];

    // Relación polimórfica con el modelo 'Product' (u otros modelos si es necesario)
    public function product_mediable()
    {
        return $this->morphTo();
    }

    // Relación con el creador de la imagen (si se tiene esta relación en la base de datos)
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
