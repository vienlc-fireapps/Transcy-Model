<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AppCategoryTranslation extends Model
{
    protected $connection = 'mysql_master';

    protected $fillable = [
        'id',
        'name',
        'category_id',
        'locale',
    ];
}
