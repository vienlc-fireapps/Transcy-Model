<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class WordCountModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $table = 'word_count';
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
        'type',
        'total_page',
        'word',
        'character',
        'status'
    ];
}
