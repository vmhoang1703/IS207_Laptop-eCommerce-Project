<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'category_id', 
        'title', 
        'meta_title', 
        'slug', 
        'content', 
        'total_products',
    ];

    protected $casts = [
        'total_products' => 'integer',
    ];

}
