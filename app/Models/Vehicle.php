<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected  = [
        'provider_id', 'category', 'plate_number', 'model_details', 'is_available'
    ];

    protected  = [
        'model_details' => 'array',
        'is_available' => 'boolean'
    ];

    public function provider()
    {
        return ->belongsTo(Provider::class);
    }
}
