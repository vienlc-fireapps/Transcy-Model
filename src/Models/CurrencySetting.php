<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencySetting extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    protected $table = 'currency_settings';

    protected $casts = [
        'settings' => 'array',
    ];

    protected $fillable = [
        'id',
        'settings',
        'hide_set_up_currency',
        'onboarding_required',
        'has_been_verified',
    ];
}
