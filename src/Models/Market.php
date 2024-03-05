<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'market';

    protected $fillable = [
        'id',
        'store_id',
        'title',
        'enabled',
        'primary',
        'locale_default',
        'currency_default',
        'domain',
        'countries',
        'list_country',
        'sub_forder',
        'adjustment_type',
        'adjustment_value',
        'created_at',
        'updated_at',
        'web_presence_id',
        'country_code',
    ];

    public function detail()
    {
        return $this->hasMany(MarketDetail::class, 'market_id');
    }
}
