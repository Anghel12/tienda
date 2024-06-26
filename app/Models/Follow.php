<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'following_user_id',
        'started_following_at',
        'stopped_following_at',
        'is_following_back',
        'is_approved'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followingUser()
    {
        return $this->belongsTo(User::class, 'following_user_id');
    }
}
