<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class WordTranslateModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $table = 'word_translate';
    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'locale',
        'type',
        'word_count',
        'created_at',
        'updated_at'
    ];
}
