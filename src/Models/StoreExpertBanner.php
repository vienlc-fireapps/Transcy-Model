<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoreExpertBanner extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'store_expert_banners';

    protected $fillable = [
        'store_id',
        'tries',
        'last_displayed_date',
        'displayed_dates',
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id');
    }
}
