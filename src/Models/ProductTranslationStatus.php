<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTranslationStatus extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'product_translation_status';

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
