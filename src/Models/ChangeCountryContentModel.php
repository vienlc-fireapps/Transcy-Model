<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ChangeCountryContentModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'change_country_content';

    protected $fillable = [
        'id',
        'store_id',
        'change_country',
        'change',
        'cancel',
        'primary_locale'

    ];
}
