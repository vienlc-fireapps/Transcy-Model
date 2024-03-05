<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ArticlesModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'articles';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'blog_id',
        'title',
        'meta_description',
        'meta_title',
        'summary_html',
        'body_html',
        'handle',
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
