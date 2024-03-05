<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoreLocale extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'store_locales';

    public $timestamps = false;

    protected $fillable = [
        'store_id',
        'locale',
        'is_pin',
        'support_google',
        'native_name',
        'primary',
        'name',
        'published',
        'is_secondary',
        'status',
        'is_active',
        'translated',
        'auto_update_product',
        'auto_update_collection',
        'auto_update_other_page',
    ];

    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'store_id', 'store_id');
    }

    public function manualTranslations()
    {
        return $this->hasMany(ManualTranslation::class, 'store_id', 'store_id');
    }
}
