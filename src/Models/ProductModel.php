<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    protected $table = 'products';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'title',
        'body_html',
        'handle',
        'image',
        'admin_graphql_api_id',
        'digest',
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variants()
    {
        return $this->hasMany(ProductVariantModel::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(ProductOptionModel::class, 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImageModel::class, 'product_id');
    }


    public function translationStatus()
    {
        return $this->hasOne(TranslationStatusModel::class, 'item_id', 'admin_graphql_api_id');
    }

    public function languageTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'item_id', 'id');
    }


    public function productTranslationStatus()
    {
        return $this->hasMany(ProductTranslationStatus::class, 'item_id', 'id');
    }
}
