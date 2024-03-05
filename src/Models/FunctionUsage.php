<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionUsage extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'function_usage';

    protected $fillable = [
        'shop_id',
        'billing_on',
        'plan',
        'app_status',
        'shopify_plan',
        'product_translation_limit',
        'auto_translation_product_limit',
        'auto_translation_collection_limit',
        'auto_translation_other_limit',
        'replace_image_product_limit',
        'replace_image_collection_limit',
        'replace_image_other_limit',
        'glossary_rule_limit',
        'n_product_translated',
        'n_auto_translate_page',
        'n_replace_image_page',
        'n_glossary_rule',
        'n_basic_language_used',
        'n_advanced_language_used',
        'n_word_translated',
        'template_switcher_mobile',
        'template_switcher_desktop',
        'auto_switch_currency',
        'auto_switch_location',
    ];
}
