<?php

namespace App\Models;

use App\Models\Home\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'type', 'is_main'];

    public function linkable()
    {
        return $this->morphTo();
    }
}
