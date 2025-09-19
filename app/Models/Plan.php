<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price_cents',
        'interval',
        'stripe_price_id',
        'active',
    ];

    protected $casts = [
        'name'              => 'string',
        'slug'              => 'string',
        'description'       => 'string',
        'price_cents'       => 'integer',
        'interval'          => 'string',
        'stripe_price_id'   => 'string',
        'active'            => 'boolean',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
