<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AutoTranslateSetting extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'auto_translate_settings';

    protected $fillable = [
        'id',
        'turn_on_new_product',
        'turn_on_new_collection',
        'turn_on_online_store_theme',
        'turn_on_shop_meta',
        'turn_on_homepage',
        'turn_on_checkout',
        'turn_on_cart',
        'turn_on_new_other_page',
        'created_at',
        'updated_at'
    ];
}
