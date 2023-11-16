<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; 

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name',
        'description',
        'price',
        'oldPrice',
        'discount',
        'stock_quantity',
        'category_id',
        'favorite_count',
        'image',
        'image_url',
        'video',
        'video_url',
    ];

    // ...
    public function scopeOrderByFavoriteCountDesc($query)
    {
        return $query->orderBy('total_favorite_count', 'desc');
    }
}
