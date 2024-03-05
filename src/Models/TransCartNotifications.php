<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class TransCartNotifications extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    protected $table = 'trans_cart_notifications';

    protected $fillable = [
        'id',
        'store_id',
        'key',
        'value',
        'locale'
    ];
}
