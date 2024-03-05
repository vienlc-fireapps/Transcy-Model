<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingUser extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'tracking_user';

    protected $casts = [
        'exception' => 'array'
    ];

    protected $fillable = [
        'id',
        'store_id',
        'shopify_domain',
        'plan_downgrade_free',
        'app_status',
        'old_plan',
        'plan',
        'type_user',
        'status_trial',
        'number_order',
        'number_day_created_stores'
        ];
}
