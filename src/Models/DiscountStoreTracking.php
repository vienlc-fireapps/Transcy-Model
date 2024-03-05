<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountStoreTracking extends Model
{
    use HasFactory;

    protected $table = 'discount_store_trackings';
    protected $connection = 'mysql_master';

    protected $fillable = [
        'discount_id',
        'store_id',
        'status',  // pending(default) | used | cancelled
        'start_at',
        'end_at',
        'cancelled_at'
    ];

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }
}
