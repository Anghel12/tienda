<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about'; // Especifica el nombre personalizado de la tabla


    protected $fillable = ['title', 'subtitle', 'body', 'miembro']; // Especifica los campos que pueden ser asignados masivamente

}
