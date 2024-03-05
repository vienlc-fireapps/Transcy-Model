<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class PausedDetail extends Model
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
    protected $table = 'paused_details';
    /**
     * @var array
     */

    protected $fillable = [
        'id',
        'store_id',
        'old_plan',
        'type',
        'description'
    ];
}
