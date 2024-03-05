<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StatisticExport extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'statistic_export';

    protected $fillable = [
        'id',
        'store_id',
        'shopify_domain',
        'app_plan',
        'name',
        'owner',
        'email',
        'total_language_publish',
        'total_currency_publish',
        'pageview_language_1',
        'pageview_1',
        'pageview_language_2',
        'pageview_2',
        'pageview_language_3',
        'pageview_3',
        'order_language_1',
        'order_1',
        'order_language_3',
        'order_3',
        'order_language_3',
        'order_3',
        'potential_market_1',
        'potential_market_2',
        'potential_market_3',
    ];
}
