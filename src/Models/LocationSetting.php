<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class LocationSetting extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'location_settings';

    protected $fillable = [
        'store_id',
        'location',
        'language',
        'currency',
    ];
}
