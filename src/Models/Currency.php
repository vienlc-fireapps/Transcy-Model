<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'currencies';

    protected $fillable = [
        'id',
        'code',
        'name',
        'symbol',
        'convert',
    ];

    protected $casts = [
        'convert' => 'array',
    ];
}
