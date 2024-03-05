<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'navigation';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'title',
        'title_digest',
        'created_at',
        'updated_at'
    ];

    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'item_id', 'id');
    }
}
