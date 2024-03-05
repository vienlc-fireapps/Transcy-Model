<?php

return [
    'PRODUCT' => [
        'channels' => 'translate-product-multiple-channel',
        'event'   => 'translate-product-multiple'
    ],
    'COLLECTION' => [
        'channels' => 'translate-collection-multiple-channel',
        'event'   => 'translate-collection-multiple'
    ],
    'ONLINE_STORE_BLOG' => [
        'channels' => 'translate-blog-multiple-channel',
        'event'   => 'translate-blog-multiple'
    ],
    'ONLINE_STORE_PAGE' => [
        'channels' => 'translate-page-multiple-channel',
        'event'   => 'translate-page-multiple'
    ],
    'PAYMENT_GATEWAY' => [
        'channels' => 'translate-payment-multiple-channel',
        'event'   => 'translate-payment-multiple'
    ],
    'ONLINE_STORE_ARTICLE' => [
        'channels' => 'translate-article-multiple-channel',
        'event'   => 'translate-article-multiple'
    ],
    'DELIVERY_METHOD_DEFINITION' => [
        'channels' => 'translate-delivery-multiple-channel',
        'event'   => 'translate-delivery-multiple'
    ],
    'LINK' => [
        'channels' => 'translate-link-multiple-channel',
        'event'   => 'translate-link-multiple'
    ],
    'FILTER' => [
        'channels' => 'translate-filter-multiple-channel',
        'event'   => 'translate-filter-multiple'
    ],
    'SMS_TEMPLATE' => [
        'channels' => 'translate-sms-multiple-channel',
        'event'   => 'translate-sms-multiple'
    ],
    'EMAIL_TEMPLATE' => [
        'channels' => 'translate-email-multiple-channel',
        'event'   => 'translate-email-multiple'
    ],
    'SHOP' => [
        'channels' => 'translate-shop-multiple-channel',
        'event'   => 'translate-shop-multiple'
    ],
    'SHOP_POLICY' => [
        'channels' => 'translate-policy-multiple-channel',
        'event'   => 'translate-policy-multiple'
    ],
    'METAFIELD' => [
        'channels' => 'translate-metafield-multiple-channel',
        'event'   => 'translate-metafield-multiple'
    ],
    'METAOBJECT' => [
        'channels' => 'translate-metaobject-multiple-channel',
        'event'   => 'translate-metaobject-multiple'
    ],
    'HOME_PAGE' => [
        'channels' => 'translate-homepage-multiple-channel',
        'event'   => 'translate-homepage-multiple'
    ],
    'CHECKOUT_PAGE' => [
        'channels' => 'translate-checkout-multiple-channel',
        'event'   => 'translate-checkout-multiple'
    ],
    'SWITCHER_TRANSLATION' => [
        'channels' => 'translate-switcher-translation-multiple-channel',
        'event'   => 'translate-switcher-translation-multiple'
    ],
    'translate_all' => [
        'channels' => 'translate-all-channel',
        'event'   => 'translate-all'
    ],
    'new_language' => [
        'channels' => 'new-language-channel',
        'event'   => 'new-language'
    ],
    'not_enough_words' => [
        'channels' => 'not-enough-words-channel',
        'event'   => 'not_enough_words'
    ],
    'single_translate' => [
        'channels' => 'single-translate-channel',
        'event'   => 'single-translate'
    ],
    'task_translate' => [
        'channels' => 'task-translate-channel',
        'event'   => 'task-translate'
    ],
    'sync_resource' => [
        'channels' => 'sync-resource-channel-',
        'event'   => 'sync-resource'
    ],
    'save_locale_shopify' => [
        'channels' => 'save-locale-shopify-channel-',
        'event'   => 'save-locale-shopify'
    ],
    'ONLINE_STORE_THEME' => [
        'channels_checkout' => 'translate-online-store-theme-checkout-channel',
        'event_checkout'   => 'translate-online-store-theme-checkout',
        'channels_homepage' => 'translate-online-store-theme-homepage-channel',
        'event_homepage'   => 'translate-online-store-theme-homepage',
        'channels_online_store_theme' => 'translate-online-store-theme-channel',
        'event_online_store_theme'   => 'event-online-store-theme',
        'channels' => 'translate-theme-channel',
        'event'   => 'translate-theme',

    ],
    'start_sync_market' => [
        'channels' => 'start-sync-market-channel-',
        'event'   => 'start-sync-market'
    ],
    'list_subresource' => [
        'BLOG' => ['ONLINE_STORE_ARTICLE', 'ONLINE_STORE_BLOG'],
        'NAVIGATION' => ['LINK', 'ONLINE_STORE_MENU', 'FILTER'],
        'SHIPPING' => ['DELIVERY_METHOD_DEFINITION', 'PACKING_SLIP_TEMPLATE'],
        'NOTIFICATION' => ['EMAIL_TEMPLATE'],
        'THEME' => ['ONLINE_STORE_THEME', "TRANSCY_SWITCHER", "TRANSCY_CART_PAGE_NOTIFICATION"],
        'PRODUCT' => ['PRODUCT'],
    ],
    'list_migrates' => [
        'THEME',
        'BLOG',
        'ONLINE_STORE_PAGE',
        'NAVIGATION',
        'SHOP',
        'PAYMENT_GATEWAY',
        'SHIPPING',
        'NOTIFICATION',
        'SHOP_POLICY',
        'COLLECTION',
        'PRODUCT',
    ],
    'list_resources' => [
        'THEME',
        'BLOG',
        'ONLINE_STORE_PAGE',
        'NAVIGATION',
        'SHOP',
        'PAYMENT_GATEWAY',
        'SHIPPING',
        'NOTIFICATION',
        'SHOP_POLICY',
        'METAFIELD',
        'COLLECTION',
        'PRODUCT',
        'METAOBJECT'
    ]
];
