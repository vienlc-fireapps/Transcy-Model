<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class LocaleSetting extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'locale_settings';

    protected $casts = [
        'settings' => 'array',
    ];
    protected $hidden = [
        'deepl_key'
    ];

    protected $fillable = [
        'id',
        'settings',
        'onboarding_required',
        'show_banner',
        'third_party',
        'deepl_key',
        'deepl_tone',
        'english_variant'
    ];
}
