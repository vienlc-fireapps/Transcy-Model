<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class LegalPageModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'legal_page';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'key',
        'value',
        'created_at',
        'updated_at'
    ];

    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'item_id', 'id');
    }
}
