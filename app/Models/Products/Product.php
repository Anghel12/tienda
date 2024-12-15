<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Link;
use App\Models\Order;
use App\Models\Tag;
use App\Models\User;
use App\Models\View;
use App\Traits\Viewable;

class Product extends Model
{
    use HasFactory;
    use Viewable;

    protected $fillable = [
        'name',
        'slug',
        'extract',
        'body',
        'stock', /* faltta 'keywords',  */
        'category_id',
        'brand_id',
        'seller_id',
        'status'
    ];

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
    public function product_price()
    {
        return $this->hasOne(ProductPrice::class);
    }
    /* Antiguo */
    public function user()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function orders()
    {
        return $this->BelongsToMany(Order::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }

    public function links()
    {
        return $this->morphone(Link::class, 'linkable');
    }

    public function marketing()
    {
        return $this->hasOne(ProductMarketing::class);
    }

    public function shipping()
    {
        return $this->hasOne(ProductShipping::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function questions()
    {
        return $this->hasMany(ProductQuestion::class);
    }

    public function promotions()
    {
        return $this->hasMany(ProductPromotion::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function policies()
    {
        return $this->hasOne(ProductPolicy::class);
    }

    public function paymentMethods()
    {
        return $this->hasMany(ProductPaymentMethod::class);
    }
}
