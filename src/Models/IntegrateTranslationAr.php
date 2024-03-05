<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class IntegrateTranslationAr extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'integrate_translation_ar';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'store_id',
        'integrate_page_ar_id',
        'integrate_widget_ar_id',
        'local',
        'key',
        'value'
    ];
}
