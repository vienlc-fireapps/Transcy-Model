<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoresBug extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'store_bug';

    protected $casts = [
        'exception' => 'array'
    ];

    protected $fillable = [
        'id',
        'type',
        'solved_at',
        'rating',
        'solved_by',
        'exception'
    ];
}
