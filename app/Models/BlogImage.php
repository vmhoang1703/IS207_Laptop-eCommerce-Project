<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'blog_images';
    protected $primaryKey = 'blogimg_id';
    protected $keyType = 'string';

    protected $fillable = [
        'blog_id',
        'image_path',
        'is_main',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'blog_id');
    }
}
