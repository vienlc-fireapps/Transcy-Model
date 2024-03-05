<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendationTranslationModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'popup_recommendation_translation';

    protected $fillable = [
        'id',
        'store_id',
        'choose_location',
        'country',
        'language',
        'currency',
        'shop_now',
        'search',
        'search_result',
        'modern_choose_location',
        'modern_popup_description',
        'modern_country',
        'modern_language',
        'modern_currency',
        'modern_change',
        'modern_search_location',
        'modern_search_language',
        'modern_search_currency',
        'modern_search_result',
        'modern_shop_now',
        'choose_location_manual_translate_status',
        'country_manual_translate_status',
        'language_manual_translate_status',
        'currency_manual_translate_status',
        'shop_now_manual_translate_status',
        'search_manual_translate_status',
        'search_result_manual_translate_status',
        'modern_choose_location_manual_translate_status',
        'modern_popup_description_manual_translate_status',
        'modern_country_manual_translate_status',
        'modern_language_manual_translate_status',
        'modern_currency_manual_translate_status',
        'modern_change_manual_translate_status',
        'modern_search_location_manual_translate_status',
        'modern_search_language_manual_translate_status',
        'modern_search_currency_manual_translate_status',
        'modern_search_result_manual_translate_status',
        'modern_shop_now_manual_translate_status',
        'locale'
    ];
}
