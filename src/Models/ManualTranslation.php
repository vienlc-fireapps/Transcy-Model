<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ManualTranslation extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'manual_translation';

    protected $fillable = [
        'store_id',
        'item_id',
        'type',
        'locale',
        'key',
        'value',
    ];
}
