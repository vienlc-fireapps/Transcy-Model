<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogStoreUninstalledApp
 *
 * @property int $id
 * @property string $name
 * @property string $shopify_domain
 * @property string $shopify_plan
 * @property string $access_token
 * @property string $app_status
 * @property string $store_password
 * @property string $email
 * @property string $app_plan
 * @property string $cancelled_on
 * @package Transcy\Models
 */
class StoreModel extends Model
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = ['store_password'];

    protected $table = 'stores';

    protected $casts = [
        'locale_migrated' => 'array'
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'shopify_domain',
        'domain',
        'shopify_plan',
        'shopify_theme',
        'owner',
        'email',
        'phone',
        'timezone',
        'country',
        'primary_locale',
        'money_with_currency_format',
        'currency',
        'app_status',
        'app_version',
        'app_plan',
        'essental_add_more_words_at',
        'pricing_version',
        'affiliate_partner_id',
        'billing_id',
        'billing_on',
        'used_trial',
        'trial_in_app_on',
        'trial_in_app_end',
        'available_word',
        'onboarding_required',
        'is_show_rating_bar',
        'language_matching',
        'are_translate_frontend',
        'show_popup_ungrateful',
        'switcher_extension',
        'cancelled_on',
        'deleted_at',
        'access_token',
        'store_password',
        'created_at',
        'updated_at',
        'locale_migrated',
        'is_new_pricing',
        'interval'
    ];

    const APP_STATUS_INSTALL = 1;
    const APP_STATUS_UNINSTALL = 0;
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::retrieved(function ($model) {
            \App\Facade\SystemCache::removeItemsFromHash(
                config('fa_setting.cache.store_detail_key'),
                $model->shopify_domain
            );
        });

        static::saved(function ($model) {
            \App\Facade\SystemCache::removeItemsFromHash(
                config('fa_setting.cache.store_detail_key'),
                $model->shopify_domain
            );
        });

        static::updated(function ($model) {
            \App\Facade\SystemCache::removeItemsFromHash(
                config('fa_setting.cache.store_detail_key'),
                $model->shopify_domain
            );
        });
    }

    public function manageBug()
    {
        return $this->hasOne(StoresBug::class, 'id', 'id');
    }

    public function switcherSetting()
    {
        return $this->hasOne(SwitcherModel::class, 'id', 'id');
    }

    public function switcherSettingCustoms()
    {
        return $this->hasMany(SwitcherCustomModel::class, 'store_id');
    }

    public function unlockFeature()
    {
        return $this->hasOne(UnlockFeatureModel::class, 'id', 'id');
    }

    public function taskList()
    {
        return $this->hasOne(TaskListModel::class, 'store_id');
    }

    public function allLocale()
    {
        return $this->hasMany(StoreLocale::class, 'store_id');
    }

    public function primaryLocale()
    {
        return $this->hasOne(StoreLocale::class, 'store_id')->where('primary', true);
    }

    public function storeLocales()
    {
        return $this->hasMany(StoreLocale::class, 'store_id')->where('primary', false)->where('is_secondary', false);
    }

    public function withoutsPrimaryLocale()
    {
        return $this->hasMany(StoreLocale::class, 'store_id')->where('primary', false);
    }

    public function metafields()
    {
        return $this->hasMany(MetaFieldModel::class, 'store_id');
    }

    public function currencies()
    {
        return $this->hasMany(StoreCurrency::class, 'store_id');
    }

    public function currencySetting()
    {
        return $this->hasOne(CurrencySetting::class, 'id', 'id');
    }

    public function locationSettings()
    {
        return $this->hasMany(LocationSetting::class, 'store_id');
    }

    public function autoTranslateSetting()
    {
        return $this->hasOne(AutoTranslateSetting::class, 'id');
    }

    public function autoTranslateOtherResources()
    {
        return $this->hasMany(OtherResourceAutoTranslate::class, 'store_id');
    }

    public function storeTrials()
    {
        return $this->hasMany(StoreTrial::class, 'store_id');
    }

    public function development()
    {
        return $this->hasOne(DevelopmentStore::class, 'shopify_domain', 'shopify_domain');
    }

    public function wordCounts()
    {
        return $this->hasMany(WordCountModel::class, 'store_id');
    }

    public function wordTranslates()
    {
        return $this->hasMany(WordTranslateModel::class, 'store_id');
    }

    public function switcherTranslations()
    {
        return $this->hasMany(SwitcherTranslationModel::class, 'store_id');
    }

    public function pausedDetail()
    {
        return $this->hasOne(PausedDetail::class, 'store_id', 'id');
    }

    public function nextPlan()
    {
        return $this->hasOne(Plan::class, 'store_id', 'id');
    }

    public function plans()
    {
        return $this->hasMany(Plan::class, 'store_id', 'id');
    }

    public function glossaries()
    {
        return $this->hasMany(Glossary::class, 'store_id');
    }

    public function testStore()
    {
        return $this->hasOne(TestStore::class, 'shopify_domain', 'shopify_domain');
    }

    public function expertTranslates()
    {
        return $this->hasMany(ExpertTranslation::class, 'store_id');
    }

    public function languagesTranslationStatus()
    {
        return $this->hasMany(LanguagesTranslationStatus::class, 'store_id');
    }

    public function storeExpertBanner()
    {
        return $this->hasOne(StoreExpertBanner::class, 'store_id');
    }

    public function manualTranslations()
    {
        return $this->hasMany(ManualTranslation::class, 'store_id');
    }

    public function expertReviews()
    {
        return $this->hasMany(ExpertReview::class, 'store_id');
    }

    public function transCartNotifications()
    {
        return $this->hasMany(TransCartNotifications::class, 'store_id');
    }

    public function buyMoreTrackings()
    {
        return $this->hasMany(TrackingBuyMoreResource::class, 'store_id');
    }

    public function buyMores()
    {
        return $this->hasMany(BuyMoreResource::class, 'store_id');
    }

    public function discountTrackings()
    {
        return $this->hasMany(DiscountStoreTracking::class, 'store_id');
    }

    public function themeAutoTranslate()
    {
        return $this->hasMany(ThemeAutoTranslate::class, 'store_id');
    }

    public function functionUsage()
    {
        return $this->hasOne(FunctionUsage::class, 'shop_id');
    }

    public function exportStoreLanguageCurrency()
    {
        return $this->hasOne(ExportStoreLanguageCurrency::class, 'store_id');
    }

    public function markets()
    {
        return $this->hasMany(Market::class, 'store_id');
    }

    public function mediaOtherDefaults()
    {
        return $this->hasMany(MediaOtherDefault::class, 'store_id');
    }

    public function geolocationSetting()
    {
        return $this->hasOne(GeolocationSetting::class, 'id', 'id');
    }

    public function webhooks()
    {
        return $this->hasMany(StoreWebhook::class, 'store_id');
    }

    public function notificationSetting()
    {
        return $this->hasOne(NotificationSetting::class, 'store_id');
    }

    public function dailySyncs()
    {
        return $this->hasMany(SettingAutoSyncV4::class, 'store_id');
    }

    public static function isTestStore($shopifyDomain): bool
    {
        return TestStore::where('shopify_domain', $shopifyDomain)->exists();
    }

    public static function isDevelopmentStore($shopifyDomain): bool
    {
        return DevelopmentStore::where([
            'shopify_domain' => $shopifyDomain,
            'status' => 1
        ])->exists();
    }
}
