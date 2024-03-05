<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class SwitcherCustomModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'switcher_settings_custom';

    protected $casts = [
        'settings' => 'array',
    ];

    protected $fillable = [
        'store_id',
        'name',
        'handle',
        'parent',
        'device',
        'settings'
    ];
}
