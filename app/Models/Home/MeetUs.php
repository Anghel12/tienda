<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetUs extends Model
{
    use HasFactory;


    // Campos permitidos para asignación masiva
    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'extract',
        'title_button',
    ];
}
