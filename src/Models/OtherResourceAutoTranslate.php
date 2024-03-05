<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class OtherResourceAutoTranslate extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'other_resource_auto_translate';

    protected $fillable = [
        'store_id',
        'resource',
        'resource_title',
        'sub_resource',
        'sub_resource_title',
        'is_auto_translate',
        'is_publish_auto_translate',
    ];

    public function autoTranslateThemes()
    {
        return $this->hasMany(ThemeAutoTranslate::class, 'store_id', 'store_id');
    }
}
