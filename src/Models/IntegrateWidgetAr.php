<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class IntegrateWidgetAr extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'integrate_widget_ar';

    protected $fillable = [
        'id',
        'store_id',
        'integrate_page_ar_id',
        'key',
        'title',
        'message'
    ];

    protected $casts = [
        'message' => 'array'
    ];

    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'item_id', 'id');
    }

    public function integratePageAr()
    {
        return $this->belongsTo(IntegratePageAr::class, 'integrate_page_ar_id', 'id');
    }

    public function integrateTranslationAr()
    {
        return $this->hasMany(IntegrateTranslationAr::class, 'integrate_widget_ar_id', 'id');
    }
}
