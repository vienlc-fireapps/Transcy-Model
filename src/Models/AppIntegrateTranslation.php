<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AppIntegrateTranslation extends Model
{
    protected $connection = 'mysql_master';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'title',
        'description',
        'app_url',
        'short_description',
        'detail_header',
        'app_integrate_id',
        'locale',
    ];
}
