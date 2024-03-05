<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class SettingAutoSyncV4 extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'setting_auto_sync_v4';

    protected $fillable = [
        'store_id',
        'resource',
        'daily_sync',
    ];
}
