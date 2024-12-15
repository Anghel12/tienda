<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductShipping extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'product_shipping';

    protected $fillable = ['product_id', 'weight', 'dimensions', 'shipping_cost', 'is_free_shipping'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
