<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class MediaOtherDefault extends Model
{
    protected $table = 'media_other_default';
    protected $connection = 'mysql_master';

    protected $fillable = [
        'store_id',
        'title',
        'item_id',
        'alt_text',
        'default',
    ];

    public function translations()
    {
        return $this->hasMany(MediaTranslate::class, 'type_id', 'item_id');
    }

    public function mediaResouce()
    {
        return $this->hasOne(MediaResource::class, 'type_id', 'item_id');
    }
}
