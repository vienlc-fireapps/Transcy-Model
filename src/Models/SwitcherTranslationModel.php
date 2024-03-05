<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class SwitcherTranslationModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    protected $table = 'switcher_translation';

    protected $fillable = [
        'id',
        'store_id',
        'language',
        'currency',
        'search',
        'apply',
        'locale',
        'location',
        'search_result',
        'change_country',
        'modern_language',
        'modern_choose_location',
        'modern_apply',
        'modern_search_language',
        'modern_search_currency',
        'modern_search_location',
        'modern_search_result',
        'modern_currency',
        'modern_description',
        'modern_change',
        'language_manual_translate_status',
        'currency_manual_translate_status',
        'search_manual_translate_status',
        'apply_manual_translate_status',
        'search_result_manual_translate_status',
        'modern_language_manual_translate_status',
        'modern_choose_location_manual_translate_status',
        'modern_search_language_manual_translate_status',
        'modern_search_currency_manual_translate_status',
        'modern_search_location_manual_translate_status',
        'modern_search_result_manual_translate_status',
        'modern_currency_manual_translate_status',
        'modern_description_manual_translate_status',
        'modern_change_manual_translate_status',
        'modern_apply_manual_translate_status',
        'person_translate_status',
    ];
}
