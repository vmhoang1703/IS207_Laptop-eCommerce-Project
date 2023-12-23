<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $primaryKey = 'blog_id';
    public $incrementing = false;

    protected $fillable = [
        'blog_id',
        'user_id',
        'category_id',
        'title',
        'meta_title',
        'slug',
        'content',
        'featured_post',
        'summary'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function images()
    {
        return $this->hasMany(BlogImage::class, 'blog_id', 'blog_id');
    }

    public function generateSlug()
    {
        return Str::slug($this->title);
    }
}
