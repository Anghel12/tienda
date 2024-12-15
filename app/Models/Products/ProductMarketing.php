<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMarketing extends Model
{
    use HasFactory;

    // Tabla asociada
    protected $table = 'product_marketing';

    // Campos rellenables
    protected $fillable = [
        'product_id',
        'description',
        'keywords',
        'priority',
        'is_featured',
        'sales_count',
        'rating',
        'reviews_count',
    ];

    // Relación con la tabla products
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
