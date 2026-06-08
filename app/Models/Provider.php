<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected  = [
        'user_id', 'business_name', 'kyc_status', 'prefers_escrow', 'latitude', 'longitude'
    ];

    public function user()
    {
        return ->belongsTo(User::class);
    }

    public function vehicles()
    {
        return ->hasMany(Vehicle::class);
    }
}
