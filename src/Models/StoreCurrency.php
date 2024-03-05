<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoreCurrency extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'store_currencies';

    protected $fillable = [
        'store_id',
        'code',
        'published',
        'is_default',
        'is_pin',
        'pin_at'
    ];

    public function currency()
    {
        return $this->hasOne(Currency::class, 'code', 'code');
    }
}
