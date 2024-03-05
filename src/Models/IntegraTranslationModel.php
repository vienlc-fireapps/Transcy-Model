<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IntegraTranslationModel extends Model
{
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
    protected $table = 'integrate_translation';

    protected $casts = [
        'short_code' => 'json'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'integration_id',
        'item_id',
        'app_name',
        'message',
        'short_code',
        'integration_detail_id'
    ];

    public function integrationDefault()
    {
        return $this->belongsTo(IntegraDefaultModel::class, 'integration_id', 'id');
    }
}
