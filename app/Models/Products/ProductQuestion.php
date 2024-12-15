<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'user_id', 'question', 'answer'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
