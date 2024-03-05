<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class LanguagesTranslationStatus extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'languages_translation_status';

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
