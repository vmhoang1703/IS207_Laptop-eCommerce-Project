<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'name',
        'username',
        'password',
        'google_id',
        'email',
        'phone',
        'ident',
        'avatar_path',
        'role',
        'knownFrom',
        'momoWallet_id',
    ];

    protected $hidden = [
        'provider_name', 'provider_id', 'password', 'remember_token',
    ];
}
