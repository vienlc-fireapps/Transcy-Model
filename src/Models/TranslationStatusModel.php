<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class TranslationStatusModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    protected $table = 'translation_status';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'shopify_domain',
        'item_id',
        'type',
        'status',
        'languages_translated',
        'elements_translated',
        'words',
        'words_translated',
        'auto_update',
        'created_at',
        'updated_at'
    ];
}
