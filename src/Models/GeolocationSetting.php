<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class GeolocationSetting extends Model
{
    protected $connection = 'mysql_master';
    protected $table = 'geolocation_setting';

    const TYPE = [
        'AUTO' => 'auto',
        'RECOMMEND' => 'recommend'
    ];

    protected $appends = [
        'location_selectors_market_auto',
        'location_selectors_market_recommend'
    ];

    protected $fillable = [
        'id',
        'setting',
        'location_recommendations_market',
        'location_selectors_market',
        'is_recommend_currency',
        'is_recommend_language',
        'recommend_visitor_type',
        'geolocation_type'
    ];

    public function getLocationSelectorsMarketAutoAttribute()
    {
        if ($this->geolocation_type == self::TYPE['AUTO']) {
            return (bool) $this->location_selectors_market;
        }

        return false;
    }

    public function getLocationSelectorsMarketRecommendAttribute()
    {
        if ($this->geolocation_type == self::TYPE['RECOMMEND']) {
            return (bool) $this->location_selectors_market;
        }

        return false;
    }

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'id', 'id');
    }

    public static function updateGeolocationByPlan($storeId, $plan)
    {
        $geolocation = GeolocationSetting::find($storeId);

        if (empty($geolocation)) {
            $dataSave = config('fa_geolocation_setting')['default'];
            GeolocationSetting::updateOrCreate(['id' => $storeId], $dataSave);

            return true;
        }

        if ($plan == 'free') {
            GeolocationSetting::where('id', $storeId)->update([
                'is_recommend_currency' => false,
                'is_recommend_language' => false,
                'recommend_visitor_type' => 'store',
                'location_recommendations_market' => false,
                'location_selectors_market' => false,
                'geolocation_type' => 'auto'
            ]);

            StoreModel::where('id', $storeId)->update(['language_matching' => 'store']);

            CurrencySetting::where('id', $storeId)->update([
                'settings->convert_prices_on_location' => false
            ]);
        }

        if ($plan == 'economy') {
            $dataUpdate = [
                'is_recommend_language' => false,
                'recommend_visitor_type' => 'store',
            ];

            StoreModel::where('id', $storeId)->update(['language_matching' => 'store']);

            if ($geolocation->geolocation_type == 'auto') {
                $currencySetting = CurrencySetting::find($storeId)->settings['convert_prices_on_location'] ?? false;

                if (!$currencySetting) {
                    $dataUpdate['location_selectors_market'] = false;
                }
            } else {
                if (!$geolocation->is_recommend_currency) {
                    $dataUpdate['location_selectors_market'] = false;
                    $dataUpdate['location_recommendations_market'] = false;
                }
            }

            GeolocationSetting::where('id', $storeId)->update($dataUpdate);
        }
    }
}
