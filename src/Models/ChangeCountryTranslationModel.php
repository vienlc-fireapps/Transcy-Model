<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ChangeCountryTranslationModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'change_country_translation';

    protected $fillable = [
        'id',
        'store_id',
        'change_country',
        'change',
        'cancel',
        'primary_locale',
        'change_country_manual_translate_status',
        'change_manual_translate_status',
        'cancel_manual_translate_status',
        'apply_manual_translate_status',
        'locale'

    ];
}
