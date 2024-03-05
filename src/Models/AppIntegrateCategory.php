<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AppIntegrateCategory extends Model
{
    protected $connection = 'mysql_master';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'app_integrate_id',
        'category_id',
        'is_highlight',
    ];
}
