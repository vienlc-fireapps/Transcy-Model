<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoreCurrencySetting extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'store_currency_setting';

    public $timestamps = true;

    protected $casts = [
        'auto_round' => 'object'
    ];

    protected $fillable = [
        'id',
        'store_id',
        'code',
        'is_default',
        'custom_code',
        'flag_code',
        'name',
        'symbol',
        'auto_round',
        'exchange_rate_type',
        'exchange_rate',
    ];

    /**
     * Format exchange rate.
     *
     * @param  string  $value
     * @return string
     */
    public function getExchangeRateAttribute($value)
    {
        return (float) number_format($value, 3, '.', '');
    }
}
