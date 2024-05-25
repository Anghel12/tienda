<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'price',
        'features',
        'classes',
        'button_title',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
