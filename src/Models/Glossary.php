<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    protected $table = 'glossary';
    protected $connection = 'mysql_master';

    protected $casts = [
        'translation_data' => 'array',
        'list_resources' => 'array',
        'list_locales' => 'array'
    ];
    protected $fillable = [
        'id',
        'store_id',
        'status',
        'text',
        'case_sensitive',
        'translation_type',
        'list_resources',
        'list_locales',
        'apply_all',
        'translation_data',
        'is_pin',
        'note',
        'created_at',
        'updated_at',
    ];

    const STATUS_PUBLIC = 1;
    const STATUS_UNPUBLIC = 0;
}
