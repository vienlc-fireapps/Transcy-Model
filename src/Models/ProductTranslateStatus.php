<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslateStatus extends Model
{
    // use for migrate
    protected $table = 'product_translation_status';
    protected $connection = 'mysql_temp';

    protected $casts = [
        'elements_translated' => 'array'
    ];

    protected $fillable = [
        'store_id',
        'item_id',
        'type',
        'status',
        'language_translated',
        'elements_translated',
        'parent',
        'auto_update'
    ];
}
