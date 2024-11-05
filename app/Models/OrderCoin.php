<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCoin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'name',
        'email',
        'amount',
        'payment_method',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->morphone(Image::class, 'imageable');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
