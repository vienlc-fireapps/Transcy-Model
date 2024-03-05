<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class QuickSetup extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'quick_setup';

    protected $casts = [
        'step' => 'array'
    ];

    protected $fillable = [
        'id',
        'store_id',
        'step'
    ];
}
