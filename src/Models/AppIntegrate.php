<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AppIntegrate extends Model
{
    protected $connection = 'mysql_master';

    const CATEGORY = [
        'store_design' => 1,
        'customer_service' => 2,
        'merchandising' => 3,
        'marketing' => 4,
        'sourcing_selling' => 5,
        'fulfillment' => 6,
        'conversion' => 7,
        'store_management' => 8,
        'shipping_delivery' => 9
    ];

    const TYPE = [
        'BASIC' => 0,
        'ADVANCE' => 1
    ];

    protected $casts = [
        'categories' => 'array'
    ];

    protected $table = 'app_integrate';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'title',
        'description',
        'type',
        'rate',
        'review',
        'is_recommended',
        'is_special',
        'key',
        'image',
        'author',
        'categories',
        'app_url',
        'short_description',
        'detail_header',
        'special_offer_info',
        'is_feature',
        'offer_image',
        'app_image',
        'logo',
        'location'
    ];

    public function appInstall()
    {
        $storeId = request()->get('store_id');

        if (empty($storeId)) {
            $storeId = request()->get('store')->id;
        }

        return $this->hasOne(AppInstall::class, 'app_id', 'id')
            ->where('store_id', $storeId);
    }

    public function appTranslate()
    {
        $locale = request()->get('locale', 'en');
        return $this->hasOne(AppIntegrateTranslation::class, 'app_integrate_id', 'id')
            ->whereIn('locale', [$locale, 'en'])
            ->orderByRaw('FIELD(locale, "' . $locale . '", "en")');
    }

    public function appInstalls()
    {
        return $this->belongsTo(AppInstall::class, 'app_id');
    }

    public function appInstallOrigin()
    {
        return $this->hasOne(AppInstall::class, 'app_id', 'id');
    }
}
