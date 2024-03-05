<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class MarketDetail extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'market_detail';

    protected $fillable = [
        'id',
        'market_id',
        'store_id',
        'locale',
        'locale_default',
        'url',
        'created_at',
        'updated_at',
    ];
}
