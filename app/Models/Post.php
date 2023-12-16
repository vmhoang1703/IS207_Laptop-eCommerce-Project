<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'post_id', 
        'postmeta_id', 
        'title', 
        'meta_title', 
        'slug', 
        'summary', 
        'content',
    ];

    public function postmeta()
    {
        return $this->belongsTo(PostMeta::class, 'postmeta_id', 'postmeta_id');
    }

    // You can add any additional methods or relationships here
}