<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'user_id',
        'plan_id',
        'stripe_subscription_id',
        'stripe_status',
        'current_period_start',
        'current_period_end',
        'trial_ends_at',
        'ends_at',
    ];


    protected $casts = [
        'user_id'                   => 'integer',
        'plan_id'                   => 'integer',
        'stripe_subscription_id'    => 'string',
        'stripe_status'             => 'string',
        'current_period_start'      => 'datetime',
        'current_period_end'        => 'datetime',
        'trial_ends_at'             => 'datetime',
        'ends_at'                   => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
