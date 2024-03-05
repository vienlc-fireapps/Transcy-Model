<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertReview extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'expert_reviews';

    protected $fillable = [
        'store_id',
        'ticket_id',
        'draft_id',
        'price',
        'charge_success',
        'apply_change',
        'testing',
        'data'
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id');
    }
}
