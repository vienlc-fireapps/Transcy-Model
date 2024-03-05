<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeContentModel extends Model
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
    protected $table = 'theme_content';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'resource_id',
        'store_id',
        'key',
        'value',
        'created_at',
        'updated_at'
    ];
}
