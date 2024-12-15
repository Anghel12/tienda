<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'payment_method'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
