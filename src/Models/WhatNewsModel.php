<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class WhatNewsModel extends Model
{
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $table = 'what_news';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'position',
        'status',
        'title',
        'content',
        'link_redirect',
        'image',
        'parent_id',
        'locale'
    ];
}
