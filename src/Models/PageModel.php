<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'pages';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'title',
        'handle',
        'body_html',
        'meta_description',
        'meta_title',
        'admin_graphql_api_id',
        'created_at',
        'updated_at'
    ];


    public function translationStatus()
    {
        return $this->hasOne(TranslationStatusModel::class, 'item_id', 'admin_graphql_api_id');
    }


    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'item_id', 'id');
    }
}
