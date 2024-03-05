<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationSetting extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'store_notification';

    protected $primaryKey = 'id';

    protected $fillable = [
        'store_id',
        'settings'
    ];

    protected $casts = [
        'settings' => 'array',
    ];

    const ACTION_GROUPS = [
        'DAILY_SYNC' => [
            'SYNC_SUCCESS' => 'translations.daily_sync.sync_success',
            'SYNC_FAIL' => 'translations.daily_sync.sync_fail',
            'RESOURCE_NEW_UPDATE' => 'translations.daily_sync.resource_new_update',
        ],
        'ONLINE_STORE' => [
            'CHANGE_DEFAULT_LANGUAGE' => 'online_store.change_default_language',
            'CHANGE_DEFAULT_CURRENCY' => 'online_store.change_default_currency',
            'PUBLISH_THEME' => 'online_store.publish_theme',
            'CHANGE_CURRENCY_FORMAT' => 'online_store.change_currency_format',
        ],
        'SHOPIFY_MARKET' => [
            'ADD_MORE_COUNTRY' => 'shopify_markets.add_country',
            'REMOVE_MORE_COUNTRY' => 'shopify_markets.remove_country',
            'ADD_MARKET' => 'shopify_markets.add_market',
            'DELETE_MARKET' => 'shopify_markets.delete_market',
            'ACTIVE_MARKET' => 'shopify_markets.active_market',
            'DEACTIVATE_MARKET' => 'shopify_markets.deactivate_market',
            'CHANGE_MARKET_DOMAIN' => 'shopify_markets.change_market_domain',
            'CHANGE_MARKET_DOMAIN_SUFFIX' => 'shopify_markets.change_market_domain_suffix',
            'DELETE_LANGUAGE_SHOPIFY' => 'shopify_markets.delete_language_shopify',
            'ADD_LANGUAGE_SHOPIFY' => 'shopify_markets.add_language_shopify',
            'PUBLISH_LANGUAGE' => 'shopify_markets.publish_language',
            'UNPUBLISH_LANGUAGE' => 'shopify_markets.unpublish_language',
            'ASSIGN_LANGUAGE' => 'shopify_markets.assign_language',
            'CHANGE_LANGUAGE_DEFAULT_MARKET' => 'shopify_markets.change_language_default_market',
            'CHANGE_CURRENCY_DEFAULT_MARKET' => 'shopify_markets.change_currency_default_market',
        ],
        'AUTO_TRANSLATE' => [
            'PAGE_UPDATED' => 'auto_translate.page_updated',
        ],
        'RELEASE_UPDATES' => [
            'RELEASE_UPDATES' => 'release_updates'
        ],
        'ONE_EXPERT' => [
            'COMPLETED_TICKET' => 'one_experts.completed_ticket',
        ],
        'TRANSLATIONS' => [],
    ];

    public function store()
    {
        return $this->belongsTo(StoreModel::class, 'store_id');
    }
}
