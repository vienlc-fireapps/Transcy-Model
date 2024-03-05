<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class MediaResource extends Model
{
    protected $table = 'media_resource';
    protected $connection = 'mysql_master';


    protected $fillable = [
        'store_id',
        'type_id',
        'type',
        'is_published'
    ];

    public function others()
    {
        return $this->hasOne(MediaOtherDefault::class, 'item_id', 'type_id');
    }

    public function translate()
    {
        return $this->hasMany(MediaTranslate::class, 'type_id', 'type_id');
    }
}
