<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $incrementing = false;
    protected $primaryKey = 'product_id'; // Đặt khóa chính của bảng.
    protected $fillable = [
        'product_id',
        'name',
        'description',
        'price',
        'oldPrice',
        'discount',
        'stock_quantity',
        'category_id',
        'total_favourite_count',
        'screen_size',
        'CPU',
        'RAM',
        'storage',
        'event'
    ];

    // ...

    /**
     * Scope to order products by favorite count in descending order.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOrderByFavouriteCountDesc($query)
    {
        return $query->orderBy('total_favourite_count', 'desc');
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
}
