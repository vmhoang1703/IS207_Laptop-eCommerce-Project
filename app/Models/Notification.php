<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notification';
    protected $primaryKey = 'noti_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'noti_id', 
        'user_id', 
        'title', 
        'description', 
        'type', 
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    // You can add any additional methods or relationships here
}
