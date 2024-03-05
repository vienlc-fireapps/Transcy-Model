<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ApiFreeSetting extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'api_free_settings';

    protected $primaryKey = 'type';

    protected $fillable = [
        'type',
        'turn_on',
    ];
}
