<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoreTrial extends Model
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
    protected $table = 'store_trials';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'app_plan',
        'status',
        'type_charge',
        'user_type',
        'trial_day',
        'trial_begin_on',
        'trial_end_on',
        'uninstall_on',
        'created_at',
        'updated_at'
    ];

    const STATUS_TRIAL = 1;
    const STATUS_END_TRIAL = 0;
}
