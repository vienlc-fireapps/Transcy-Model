<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ExportStoreLanguageCurrency extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'export_store_language_currency';

    protected $primaryKey = 'id';

    protected $fillable = [
        'store_id',
        'app_plan',
        'language_default',
        'currency_default',
        'currency_without_market',
        'primary_market',
        'language_primary_market',
        'currency_primary_market',
        'other_market',
        'language_other_market',
        'currency_other_market',
        'advance_language',
        'basic_language',
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id');
    }
}
