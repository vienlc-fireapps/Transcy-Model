<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class IntegraDetailModel extends Model
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
    protected $table = 'integration_details';
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
    ];

    public function integrationDefault()
    {
        return $this->belongsTo(IntegraDefaultModel::class, 'integration_id', 'id');
    }

    public function integrationTranslation()
    {
        return $this->hasOne(IntegraTranslationModel::class, 'integration_detail_id', 'id');
    }
}
