<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'product_prices';

    protected $fillable = ['product_id', 'price', 'discount', 'final_price', 'price_reciente'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
