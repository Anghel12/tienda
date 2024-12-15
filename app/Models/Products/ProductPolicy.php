<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPolicy extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'product_policies';

    protected $fillable = ['product_id', 'shipping_policy', 'return_policy'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
