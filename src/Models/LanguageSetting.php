<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageSetting extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'language_setting';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'store_id',
        'locale',
        'english_name',
        'short_name',
        'native_name',
        'flag_locale',
    ];
}
