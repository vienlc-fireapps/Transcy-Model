<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class CollectionModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'collections';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'title',
        'body_html',
        'handle',
        'collection_type',
        'image',
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
