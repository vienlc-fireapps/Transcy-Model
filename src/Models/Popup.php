<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'popups';

    protected $fillable = [
        'id',
        'store_id',
        'type',
        'screen',
        'expired_time'
    ];

    protected $casts = [
        'screen' => 'array',
    ];
}
