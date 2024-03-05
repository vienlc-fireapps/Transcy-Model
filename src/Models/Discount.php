<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    const DISCOUNT_SESSION = 'session:discount-link-code:';

    protected $table = 'discounts';
    protected $connection = 'mysql_master';

    protected $fillable = [
        'promotion_type',
        'discount_code',
        'promotion_status',
        'agencies',
        'discount_type',
        'billing_cycle',
        'target_plan',
        'discount_month',
        'discount_year',
        'target_users',
        'discount_periods',
        'start_date',
        'end_date',
        'frequency',
        'created_by',
        'activated_at',
    ];

    protected $casts = [
        'agencies' => 'array',
        'target_users' => 'array'
    ];

    public function discountStores()
    {
        return $this->hasMany(DiscountStore::class, 'discount_id');
    }

    public function discountTrackings()
    {
        return $this->hasMany(DiscountStoreTracking::class, 'discount_id');
    }
}
