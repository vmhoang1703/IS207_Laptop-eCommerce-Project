<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'users';
    public $incrementing = false;
    protected $primaryKey = 'user_id';
    protected $keyType = 'string';
    protected $fillable = [
        'user_id',
        'name',
        'password',
        'google_id',
        'email',
        'phone',
        'role',
        'knownFrom',
        'date_of_birth',
        'address',
        'department',
        'position',
        'salary',
        'hire_date',
    ];

    protected $hidden = [
        'provider_name', 'provider_id', 'password', 'remember_token',
    ];
}
