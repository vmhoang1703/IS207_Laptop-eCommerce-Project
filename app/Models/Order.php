<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'order_id', 
        'product_id', 
        'user_id', 
        'status', 
        'subtotal', 
        'shipping',
        'total', 
        'promo', 
        'discount', 
        'fullname', 
        'phone', 
        'email',
        'street_address', 
        'number_address', 
        'city', 
        'province', 
        'note',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'tax' => 'decimal:2',
        'shipping' => 'decimal:2',
        'total' => 'decimal:2',
        'discount' => 'decimal:2',
        'grandtotal' => 'decimal:2',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // You can add any additional methods or relationships here
}
