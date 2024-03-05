<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;
use Transcy\Models\AppSubCategoryTranslation;

class AppSubCategory extends Model
{
    protected $connection = 'mysql_master';
    protected $fillable = [
        'id',
        'name',
        'position',
        'category_id',
    ];

    public function childColumns($isJson = true, $column = 'locale')
    {
        $list = $this->hasMany('\Transcy\Models\AppSubCategoryTranslation', 'sub_category_id', 'id')->get($column);
        $result = [];
        foreach ($list as $item) {
            $result[] = $item->{$column};
        }
        if ($isJson) {
            return implode(', ', $result);
        }
        return $result;
    }

    public function translations()
    {
        return $this->hasMany('\Transcy\Models\AppSubCategoryTranslation', 'sub_category_id', 'id');
    }

    public function translateLocale()
    {
        $locale = request()->get('locale', 'en');
        return $this->hasOne(AppSubCategoryTranslation::class, 'sub_category_id', 'id')
            ->whereIn('locale', [$locale, 'en'])
            ->orderByRaw('FIELD(locale, "' . $locale . '", "en")');
    }

    public function appTranslate()
    {
        $locale = request()->get('locale', 'en');
        return $this->hasOne(AppIntegrateTranslation::class, 'app_integrate_id', 'app_integrate_id')
            ->whereIn('locale', [$locale, 'en'])
            ->orderByRaw('FIELD(locale, "' . $locale . '", "en")');
    }

    public function appInstall()
    {
        $storeId = request()->get('store_id');

        if (empty($storeId)) {
            $storeId = request()->get('store')->id;
        }

        return $this->hasOne(AppInstall::class, 'app_id', 'app_integrate_id')
            ->where('store_id', $storeId);
    }

    public function appIntegrate()
    {
        return $this->hasOne(AppIntegrate::class, 'id', 'app_integrate_id')->select([
            'app_integrate.id',
            'app_integrate.type',
            'app_integrate.logo',
            'app_integrate.rate',
            'app_integrate.review',
            'app_integrate.is_recommended',
            'app_integrate.is_special',
            'app_integrate.key',
            'app_integrate.author',
            'app_integrate.app_url',
            'app_integrate.is_feature',
            'app_integrate.offer_image',
            'app_integrate.app_image',
            'app_integrate.show',
            'app_integrate.location',
        ]);
    }
}
