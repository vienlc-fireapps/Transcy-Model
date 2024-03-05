<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountStore extends Model
{
    use HasFactory;

    protected $table = 'discount_stores';
    protected $connection = 'mysql_master';

    protected $fillable = [
        'discount_id',
        'store_id',
        'status'
    ];

    public function discount()
    {
        return $this->belongsTo(Discount::class, 'discount_id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public function trackings()
    {
        return $this->hasMany(DiscountStoreTracking::class, 'discount_store_id');
    }
}
