<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoreDataExportModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'data_store_export';

    protected $fillable = [
        'id',
        'shopify_domain',
        'email',
        'app_plan',
        'app_status',
        'old_app_plan',
        'shopify_plan',
        'date_create_store',
        'install_at',
        'count_order',
        'revenue',
        'count_language',
        'list_language',
        'product_translate',
        'product_auto_translate',
        'product_manual_translate',
        'count_currency',
        'location_scan',
        'use_switcher_setting',
        'switcher_disclosure',
        'switcher_template_mobile',
        'switcher_template_desktop',
        'switcher_preference_desktop',
        'switcher_preference_mobile'
    ];
}
