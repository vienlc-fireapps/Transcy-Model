<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class IntegraDefaultModel extends Model
{
    const SALE_BOX = 'Sales Box';

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
    protected $table = 'integrate_default';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'item_id',
        'app_name',
        'key',
        'value',
    ];

    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'item_id', 'id');
    }

    public function integrationDetails()
    {
        return $this->hasMany(IntegraDetailModel::class, 'integration_id', 'id');
    }
}
