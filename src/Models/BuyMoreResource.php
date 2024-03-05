<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyMoreResource extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'buy_more_resources';

    protected $fillable = [
        'store_id',
        'target_plan',
        'interval',
        'resource',
        'quantity',
        'price'
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id');
    }
}
