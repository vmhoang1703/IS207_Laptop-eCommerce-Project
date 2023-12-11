<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMeta extends Model
{
    protected $table = 'postsmeta';
    protected $primaryKey = 'postmeta_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'postmeta_id', 
        'title', 
        'content',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'postmeta_id', 'postmeta_id');
    }

    // You can add any additional methods or relationships here
}