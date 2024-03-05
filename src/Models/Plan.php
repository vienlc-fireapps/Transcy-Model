<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'plans';

    public const TYPE = [
        'NEW' => 'new', // dùng cho next plan
        'OLD' => 'old', // lưu old plan để tracking
        'UNINSTALL' => 'uninstall' // khi gỡ app
    ];

    protected $fillable = [
        'id',
        'store_id',
        'billing_id',
        'name',
        'price',
        'interval',
        'billing_on',
        'activated_on',
        'is_activated',
        'type',
        'is_used',
        'parent_id'
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id', 'id');
    }
}
