<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class SwitcherEditDefault extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'switcher_edit_default';

    protected $fillable = [
        'id',
        'store_id',
        'language',
        'currency',
        'search',
        'apply',
        'location',
        'search_result',
        'change_country',
        'modern_language',
        'modern_apply',
        'modern_choose_location',
        'modern_search_language',
        'modern_search_currency',
        'modern_search_location',
        'modern_search_result',
        'modern_currency',
        'modern_description',
        'modern_change',
        'primary_locale'
    ];
}
