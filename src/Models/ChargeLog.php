<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ChargeLog extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    protected $table = 'charge_log';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'plan',
        'price',
        'billing_on',
        'billing_id',
        'trial_day',
        'interval',
        'created_at',
        'updated_at'
    ];
}
