<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreWebhook extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    protected $table = 'store_webhooks';
    /**
     * @var array
     */
    protected $fillable = [
        'store_id',
        'app_version',
        'webhook_version',
        'app_plan',
        'webhooks'
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id');
    }
}
