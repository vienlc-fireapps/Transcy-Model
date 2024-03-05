<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class RecommendationContentModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'popup_recommendation_content';

    protected $fillable = [
        'id',
        'store_id',
        'choose_location',
        'country',
        'language',
        'currency',
        'shop_now',
        'search',
        'no_result',
        'modern_choose_location',
        'modern_popup_description',
        'modern_country',
        'modern_language',
        'modern_currency',
        'modern_change',
        'modern_search_location',
        'modern_search_language',
        'modern_search_currency',
        'modern_shop_now',
        'primary_locale'
    ];
}
