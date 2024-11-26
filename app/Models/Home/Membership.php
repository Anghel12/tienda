<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Membership extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'body', 'subtitle', 'sub_body', 'price', 'offer', 'price_title']; // Especifica los campos que pueden ser asignados masivamente

}
