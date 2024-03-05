<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class MarketCurrencyDetail extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'market_currencies_detail';

    protected $fillable = [
        'id',
        'market_id',
        'store_id',
        'code',
        'sort',
        'is_local',
        'is_primary',
    ];
}
