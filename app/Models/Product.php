<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table = 'products';
    public $incrementing = false;
    protected $primaryKey = 'product_id'; // Đặt khóa chính của bảng.
    protected $keyType = 'string';
    protected $fillable = [
        'product_id',
        'user_id',
        'title',
        'meta_title',
        'slug',
        'description',
        'price',
        'discount',
        'quantity',
        'status',
        'category_id',
        'total_favorites',
        'brand',
        'screen_size',
        'CPU',
        'RAM',
        'storage',
        'event'
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    // ...

    /**
     * Scope to order products by favorite count in descending order.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderByFavoriteCountDesc($query)
    {
        return $query->orderBy('total_favorites', 'desc');
    }
    /**
     * Define the relationship between Product and ProductImage.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function generateSlug()
    {
        return Str::slug($this->title);
    }
}
