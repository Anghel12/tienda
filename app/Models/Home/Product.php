<?php

namespace App\Models\Home;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Link;
use App\Models\Order;
use App\Models\Price;
use App\Models\Review;
use App\Models\subCategory;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'extract',
        'body',
        'stock',
        'price',
        'price_reciente',
        'status',
        'user_id',
        'category_id',
        'brand_id'
    ];

    /**
     * Los atributos que deben ser tratados como tipos nativos.
     */
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];

    /**
     * Relación de ejemplo: productos con categoría (si usas una tabla `categories`).
     * Puedes implementarla si decides tener una tabla separada para categorías.
     */
   //relacion uno a muchos inversa
   public function user(){
    return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //relacion uno a muchos inversa
    public function sub_categoria(){
        return $this->belongsTo(subCategory::class);
    }

    //relacion uno a muchos inversa
    public function brand()
{
    return $this->belongsTo(Brand::class, 'brand_id');
}

    //relacion muchos a muchos
    public function orders(){
        return $this->BelongsToMany(Order::class);
    }

    //relacion muchos a muchos
    public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

    public function links()
    {
        return $this->morphone(Link::class, 'linkable');
    }

    //relacion uno a uno polimorfica
    /*   public function images(){
        return $this->morphMany(Image::class, 'imageable');
        } */
    public function images(){
        return $this->morphone(Image::class, 'imageable');
    }

    //Relacion uno a muchos polimorfica
    public function comment(){
        
        return $this->morphMany(Comment::class, 'commentable');
    }

    //relacion uno a uno polimorfica
    public function price(){
        
        return $this->morphone(Price::class, 'priceable');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
