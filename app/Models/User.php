<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'username',
        'password',
        'email',
        'phone',
        'ident',
        'avatarLink',
        'role',
        'knownFrom',
        'momoWallet_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
