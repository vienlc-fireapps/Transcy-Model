<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AppIntegrateSubCategory extends Model
{
    protected $connection = 'mysql_master';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'app_integrate_id',
        'sub_category_id',
        'is_highlight',
    ];
}
