<?php

namespace App\Models;

use App\Models\Products\ProductVideo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Viewable;

class Blogs extends Model
{
    use HasFactory, Viewable;

    protected $fillable = ['title', 'slug', 'body', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function views()
        {
            return $this->morphMany(View::class, 'viewable');
        }


        public function mainImage()
        {
            return $this->morphOne(Image::class, 'imageable')->where('is_main', true);
        }
    
        // Relación con las imágenes
        public function images() 
        {
            return $this->morphMany(Image::class, 'imageable');
        }

        // Relación con los videos
        public function video()
        {
              return $this->morphOne(ProductVideo::class, 'videoable');
        }

        // Relación con los videos
        public function videos()
        {
            return $this->morphMany(ProductVideo::class, 'videoable');
        }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
