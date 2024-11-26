<?php

namespace App\Models\Admin\FuntWallet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageCoin extends Model
{
    use HasFactory;

    // Especifica la tabla asociada al modelo
    protected $table = 'package_coins';

    // Los campos que pueden ser asignados masivamente
    protected $fillable = [
        'titulo',
        'body',
        'numero',
        'title_button',
        'sub_titulo',
        'etiquetas',
    ];

    // Opcional: Si deseas que 'etiquetas' se maneje automáticamente como un array
    protected $casts = [
        'etiquetas' => 'array',
    ];
}
