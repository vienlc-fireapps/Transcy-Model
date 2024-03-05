<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AppSubCategoryTranslation extends Model
{
    protected $connection = 'mysql_master';
    protected $fillable = [
        'id',
        'name',
        'sub_category_id',
        'locale',
    ];
}
