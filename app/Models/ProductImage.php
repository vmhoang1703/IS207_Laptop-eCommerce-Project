<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'product_images';
    protected $primaryKey = 'productimg_id';
    protected $keyType = 'string';
    protected $fillable = [
        'product_id',
        'image_path',
        'is_main'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
