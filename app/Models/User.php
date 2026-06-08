<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected  = [
        'name', 'phone', 'email', 'password', 'role', 'wallet_balance'
    ];

    protected  = [
        'password', 'remember_token',
    ];

    public function provider()
    {
        return ->hasOne(Provider::class);
    }
}
