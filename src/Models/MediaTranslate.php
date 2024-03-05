<?php

namespace Transcy\Models;

use FireApps\OriginApp\Helper\MediaUploader;
use Illuminate\Database\Eloquent\Model;

class MediaTranslate extends Model
{
    protected $table = 'media_translate';
    protected $connection = 'mysql_master';



    protected $fillable = [
        'store_id',
        'type_id',
        'product_id',
        'type',
        'default',
        'translation',
        'default',
        'locale',
        'image_type'
    ];
}
