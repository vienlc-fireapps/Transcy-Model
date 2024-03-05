<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'delivery';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'key',
        'value',
        'digest',
        'created_at',
        'updated_at'
    ];

    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'item_id', 'id');
    }
}
