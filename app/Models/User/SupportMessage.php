<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportMessage extends Model
{
    use HasFactory;

    protected $table = 'support_messages';

    protected $fillable = [
        'from_id',
        'to_id',
        'body',
        'attachment',
        'seen'
    ];

    // Relación para el usuario que envía el mensaje
    public function sender()
    {
        return $this->belongsTo(User::class, 'from_id');
    }

    // Relación para el usuario que recibe el mensaje
    public function receiver()
    {
        return $this->belongsTo(User::class, 'to_id');
    }
}
