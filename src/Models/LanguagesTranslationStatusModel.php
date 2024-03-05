<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class LanguagesTranslationStatusModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'languages_translation_status';

    protected $casts = [
        'elements_translated' => 'array'
    ];
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'item_id',
        'type',
        'status',
        'language_translated',
        'elements_translated',
        'auto_update',
        'created_at',
        'updated_at'
    ];
}
