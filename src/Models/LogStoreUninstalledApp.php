<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogStoreUninstalledApp
 *
 * @property int $id
 * @property string $store_id
 * @property string $message
 * @property string $is_error
 * @package Transcy\Models
 */
class LogStoreUninstalledApp extends Model
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

    protected $table = 'log_stores_uninstalled_app';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'message',
        'is_error',
        'created_at',
        'updated_at',
    ];

    const IS_ERROR = '1';
    const IS_NO_ERROR = '0';
}
