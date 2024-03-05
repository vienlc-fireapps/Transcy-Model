<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeAutoTranslate extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'theme_auto_translate';

    protected $fillable = [
        'store_id',
        'sub_resource',
        'child_resource',
        'child_resource_title',
        'is_auto_translate',
        'is_publish_auto_translate',
    ];
}
