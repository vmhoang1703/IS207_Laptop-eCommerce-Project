<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Để đảm bảo rằng model này tương ứng với bảng "categories" trong cơ sở dữ liệu.

    protected $primaryKey = 'category_id'; // Đặt khóa chính của bảng.

    // Các trường khác trong bảng "categories".
    protected $fillable = [
        'category_id',
        'name',
    ];

}
