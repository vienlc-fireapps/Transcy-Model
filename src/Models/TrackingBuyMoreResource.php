<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingBuyMoreResource extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'tracking_buy_more_resource';

    protected $fillable = [
        'store_id',
        'status',
        'app_version',
        'is_disccount',
        'current_app_plan',
        'interval',
        'target_plan',
        'target_resource',
        'product_translate',
        'glossary',
        'auto_translate',
        'replace_image',
        'price',
        'total_price',
        'charge_test',
        'charge_id',
        'published_at',
        'cancelled_at'
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id');
    }
}
