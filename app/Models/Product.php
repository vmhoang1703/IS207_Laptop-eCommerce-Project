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
        'stock_quantity',
        'category_id',
        'image',
        'image_url',
        'video',
        'video_url',
    ];

    // ...
}
