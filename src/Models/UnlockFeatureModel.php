<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class UnlockFeatureModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'unlock_feature';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'remove_logo',
        'allow_setting_logo',
        'solved_at',
        'solved_by',
        'rating'
    ];
}
