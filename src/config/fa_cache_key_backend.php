<?php

return [
    'default_cache_time' => 5 * 24 * 60 * 60,
    'default_cache_time_translate_process' =>  60 * 60,
    'default_cache_uninstall' => 30 * 24 * 60 * 60,
    'key_cache_intercom_charge' => 'cache_intercom_charge_',
    'key_cache_crispchat_charge' => 'cache_crispchat_charge_',
    'key_cache_loop_banner' => 'loop_banner',
    'store' => [
        'keys' => [
            'detail' => 'cache_store_info_v14_',
            'detail_array' => 'cache_store_info_array_v8_',
            're_install' => 'cache_store_free_reinstall_',
            're_install_ask_setting' => 'cache_store_re_install_ask_setting',
            'used_autotranslate' => 'cache_store_used_autotranslate_',
            'popup_after_trial_in_app' => 'cache_store_popup_after_trial_in_app_',
            'hide_popup_upgrade_sidebar' => 'cache_store_hide_popup_upgrade_sidebar_',
            'hide_popup_confirm_translate' => 'cache_store_hide_popup_confirm_translate_',
            'cheat_waiting' => 'cache_store_cheat_waiting_',
            'popup_after_change_default_language' => 'cache_popup_after_change_default_language_',
            'popup_select_locale_plan_free' => 'cache_popup_select_locale_plan_free_',
            'uninstalled' => 'cache_uninstalled_',
            'hide-let-start-replace-image' => 'hide-let-start-replace-image_',
        ],
        'tags' => [

        ],
    ],
    'product' => [
        'keys' => [
            'paginate' => 'cache_paginate_products_',
            'detail' => 'cache_product_info_v2_',
            'count' => 'cache_product_count_v_2_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_products_',
            'count_status' => 'cache_tags_count_status_products_v_2_',
        ],
    ],
    'product_options' => [
        'keys' => [
            'paginate' => 'cache_paginate_product_options_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_product_options_',
        ],
    ],
    'product_variants' => [
        'keys' => [
            'paginate' => 'cache_paginate_product_variants_',
            'call_variants' => 'cache_call_variants_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_product_variants_',
            'call_variants' => 'cache_tags_call_variants_',
        ],
    ],
    'collection' => [
        'keys' => [
            'paginate' => 'cache_paginate_collections_',
            'detail' => 'cache_collection_info_',
            'count' => 'cache_collection_count_v_2_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_collections_',
            'count_status' => 'cache_tags_count_status_collection_v_2_',
        ],
    ],
    'order' => [
        'keys' => [
            'count60' => 'cache_order_60_day_'
        ],

    ],
    'article' => [
        'keys' => [
            'paginate' => 'cache_paginate_articles_v2_',
            'detail' => 'cache_article_info_v2_',
            'count' => 'cache_article_count_v_2_',
            'sync' => 'cache_article_sync'
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_articles_',
            'count_status' => 'cache_tags_count_status_article_v_2_',
        ],
    ],
    'blog' => [
        'keys' => [
            'paginate' => 'cache_paginate_blogs_',
            'detail' => 'cache_blog_info_',
            'count' => 'cache_blog_count_v_2_',
            'sync' => 'cache_blog_sync'
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_blogs_',
            'count_status' => 'cache_tags_count_status_blog_v_2_',
        ],
    ],
    'page' => [
        'keys' => [
            'paginate' => 'cache_paginate_pages_',
            'detail' => 'cache_page_info_',
            'count' => 'cache_page_count_v_2_',
            'sync' => 'cache_page_sync'
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_pages_',
            'count_status' => 'cache_tags_count_status_page_v_2_',
        ],
    ],
    'switcher_settings' => [
        'keys' => [
            'paginate' => 'cache_paginate_switcher_settings_2_',
            'detail' => 'cache_switcher_setting_info_3_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_switcher_settings_2_',
        ],
    ],
    'custom_switcher_translate' => [
        'keys' => [
            'paginate' => 'cache_paginate_custom_switcher_translate_3',
            'detail' => 'cache_custom_switcher_translate_info_4',
        ],
        'tags' => [
            'paginate' => 'cache_tags_custom_switcher_translate_3',
        ],
    ],
    'account_settings' => [
        'keys' => [
            'detail' => 'cache_account_setting_detail_',
        ],
        'tags' => [

        ],
    ],
    'charge' => [
        'keys' => [
            'billing_info' => 'cache_billing_info_',
        ],
        'tags' => [

        ],
    ],
    'shop_locales' => [
        'keys' => [
            'languages' => 'cache_shop_locales_v1',
            'paginate' => 'cache_paginate_store_locales_v1_',
            'detail' => 'cache_store_locales_info_v1_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_store_locales_v1_',
        ],
    ],
    'translate_theme' => [
        'keys' => [
            'percent' => 'cache_translate_persent_theme_',
        ],
        'tags' => [

        ],
    ],
    'translate_blog' => [
        'keys' => [
            'percent' => 'cache_translate_persent_blog_',
        ],
        'tags' => [

        ],
    ],
    'translate_collection' => [
        'keys' => [
            'percent' => 'cache_translate_persent_collection_',
        ],
        'tags' => [

        ],
    ],
    'translate_product' => [
        'keys' => [
            'percent' => 'cache_translate_persent_product_',
        ],
        'tags' => [

        ],
    ],
    'translate_page' => [
        'keys' => [
            'percent' => 'cache_translate_persent_page_',
        ],
        'tags' => [

        ],
    ],
    'translate_payment' => [
        'keys' => [
            'percent' => 'cache_translate_persent_payment_',
        ],
        'tags' => [

        ],
    ],
    'translate_shop' => [
        'keys' => [
            'percent' => 'cache_translate_persent_shop_',
        ],
        'tags' => [],
    ],
    'translate_metafield' => [
        'keys' => [
            'percent' => 'cache_translate_persent_metafield_',
        ],
        'tags' => [],
    ],
    'translate_article' => [
        'keys' => [
            'percent' => 'cache_translate_persent_article_',
        ],
        'tags' => [

        ],
    ],
    'translate_delivery' => [
        'keys' => [
            'percent' => 'cache_translate_persent_delivery_',
        ],
        'tags' => [

        ],
    ],
    'translate_link' => [
        'keys' => [
            'percent' => 'cache_translate_persent_link_',
        ],
        'tags' => [

        ],
    ],
    'translate_sms' => [
        'keys' => [
            'percent' => 'cache_translate_persent_sms_',
        ],
        'tags' => [

        ],
    ],
    'translate_email' => [
        'keys' => [
            'percent' => 'cache_translate_persent_email_',
        ],
        'tags' => [

        ],
    ],
    'translate_policy' => [
        'keys' => [
            'percent' => 'cache_translate_persent_policy_',
        ],
        'tags' => [

        ],
    ],
    'translate_all' => [
        'keys' => [
            'percent' => 'cache_translate_persent_all_',
        ],
        'tags' => [

        ],
    ],
    'new_languages' => [
        'keys' => [
            'languages' => 'cache_new_languages_',
            'add_in_app' => 'cache_new_languages_add_in_app_'
        ],
        'tags' => [

        ],
    ],
    'store_currencies' => [
        'keys' => [
            'paginate' => 'cache_paginate_store_currencies_4_',
            'detail' => 'cache_store_currencies_info_4_',
            'count' => 'cache_store_currencies_count_4_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_store_currencies_4_',
        ],
    ],
    'currencies' => [
        'keys' => [
            'all' => 'cache_paginate_currencies_3_',
            'detail' => 'cache_currencies_info_3_',
            'money_format' => 'cache_money_format_'
        ],
        'tags' => [
        ],
    ],
    'currency_settings' => [
        'keys' => [
            'paginate' => 'cache_paginate_currency_settings_6_',
            'detail' => 'cache_currency_settings_info_6_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_currency_settings_6_',
        ],
    ],
    'auto_translate_settings' => [
        'keys' => [
            'detail' => 'cache_auto_translate_settings_',
        ],
        'tags' => [
        ],
    ],
    'remind_downgrade' => [
        'keys' => [
            'detail' => 'cache_remind_downgrade_'
        ]
    ],
    'media_other_default' => [
        'keys' => [
            'paginate' => 'cache_paginate_media_other_default_',
            'detail' => 'cache_media_other_default_info_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_media_other_default_',
        ],
    ],
    'locale_settings' => [
        'keys' => [
            'paginate' => 'cache_paginate_locale_settings_',
            'detail' => 'cache_locale_settings_info_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_locale_settings_',
        ],
    ],
    'location_settings' => [
        'keys' => [
            'paginate' => 'cache_paginate_location_settings_',
            'detail' => 'cache_location_settings_info_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_location_settings_',
        ],
    ],

    'api_free_settings' => [
        'keys' => [
            'detail' => 'cache_api_free_settings_by_type_',
            'total_request_ok' => 'cache_total_request_google_free_ok',
            'total_request_fail' => 'cache_total_request_google_free_fail',

            'total_request_ok_2' => 'cache_total_request_google_free_ok_2',
            'total_request_fail_2' => 'cache_total_request_google_free_fail_2',

            'total_request_ok_3' => 'cache_total_request_google_free_ok_3',
            'total_request_fail_3' => 'cache_total_request_google_free_fail_3',
        ],
        'tags' => [
            'api_free_settings' => 'api_free_settings_all_type',
        ],
    ],
    'navigation' => [
        'keys' => [
            'count' => 'cache_navigation_count_v_2_',
            'paginate' => 'cache_paginate_navigation_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_navigation_',
            'count_status' => 'cache_tags_count_status_navigation_v_2_',
        ],
    ],
    'delivery_method' => [
        'keys' => [
            'count' => 'cache_delivery_method_count_v_2_',
            'paginate' => 'cache_paginate_delivery_method_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_delivery_method_',
            'count_status' => 'cache_tags_count_status_delivery_method_v_2_',
        ],
    ],
    'legal_page' => [
        'keys' => [
            'count' => 'cache_legal_page_count_v_2_',
            'paginate' => 'cache_paginate_legal_page_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_legal_page_',
            'count_status' => 'cache_tags_count_status_legal_page_v_2_',
        ],
    ],
    'payment_gateway' => [
        'keys' => [
            'count' => 'cache_payment_gateway_count_v_2_',
            'paginate' => 'cache_paginate_payment_gateway_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_payment_gateway_',
            'count_status' => 'cache_tags_count_status_payment_gateway_v_2_',
        ],
    ],
    'metafield' => [
        'keys' => [
            'count' => 'cache_metafield_count_v_2_',
            'paginate' => 'cache_paginate_metafield_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_metafield_',
            'count_status' => 'cache_tags_count_status_metafield_v_2_',
        ],
    ],
    'task_list' => [
        'keys' => [
            'paginate' => 'cache_paginate_task_list_v3_',
            'detail' => 'cache_task_list_info_v3_',
            'count' => 'cache_task_list_count_v3_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_task_list_v3_',
        ],
    ],
    'banner' => [
        'keys' => [
            'paginate' => 'cache__key_list_banner_paginate_',
        ],
        'tags' => [
            'paginate' => 'cache_tag_list_banner_paginate_',
        ],
    ],
    'trial_in_app' => [
        'keys' => [
            'detail' => 'cache_trial_inapp_info_',
        ],
        'tags' => []
    ],
    'shop_meta' => [
        'keys' => [
            'count' => 'cache_shop_meta_count_v_2_',
            'paginate' => 'cache_paginate_shop_meta_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_shop_meta_',
            'count_status' => 'cache_tags_count_status_shop_meta_v_2_',
        ],
    ],

    'media_resource' => [
        'keys' => [
            'paginate' => 'cache_paginate_media_resource_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_media_resource_',
        ],
    ],

    'language_status' => [
        'keys' => [
            'paginate' => 'cache_paginate_language_status_v_2_',
            'suggest_language' => 'cache_suggest_publish_language_',
            'increment_resource_current' => 'cache_increment_resource_current_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_language_status_v_2_',
        ],
    ],

    'manage_text' => [
        'keys' => [
            'paginate' => 'cache_paginate_manage_text_v_4_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_paginate_manage_text_v_4_',
        ],
    ],
    'translate_auto' => [
        'keys' => [
            'list_other_resource' => 'cache_list_other_resource',
        ]
    ],
    'feedback_users' => [
        'keys' => [
            'detail' => 'cache_feedback_users_info_',
        ],
        'tags' => []
    ],
    'store_theme_blogs' => [
        'keys' => [
            'detail' => 'cache_store_theme_blogs_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_collections' => [
        'keys' => [
            'detail' => 'cache_store_theme_collections_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_contacts' => [
        'keys' => [
            'detail' => 'cache_store_theme_contacts_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_customers' => [
        'keys' => [
            'detail' => 'cache_store_store_theme_customers_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_date_formats' => [
        'keys' => [
            'detail' => 'cache_store_theme_date_formats_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_generals' => [
        'keys' => [
            'detail' => 'cache_store_theme_generals_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_gift_carts' => [
        'keys' => [
            'detail' => 'cache_store_theme_gift_carts_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_layouts' => [
        'keys' => [
            'detail' => 'cache_store_theme_layouts_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_other_pages' => [
        'keys' => [
            'detail' => 'cache_store_theme_other_pages_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_page_types' => [
        'keys' => [
            'detail' => 'cache_store_theme_page_types_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_sections' => [
        'keys' => [
            'detail' => 'cache_store_theme_sections_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_shopifys' => [
        'keys' => [
            'detail' => 'cache_store_theme_shopifys_detail_',
        ],
        'tags' => [

        ],
    ],
    'store_theme_products' => [
        'keys' => [
            'detail' => 'cache_store_theme_products_detail_',
        ],
        'tags' => [

        ],
    ],
    'trans_cart_notifications' => [
        'keys' => [
            'paginate' => 'cache_paginate_trans_cart_notifications_',
            'detail' => 'cache_trans_cart_notifications_info_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_trans_cart_notifications_',
        ],
    ],
    'switcher_translation' => [
        'keys' => [
            'paginate' => 'cache_paginate_switcher_translation_',
            'detail' => 'cache_switcher_translation_info_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_switcher_translation_',
        ],
    ],
    'setting_auto_sync' => [
        'keys' => [
            'paginate' => 'cache_paginate_setting_auto_sync_',
            'detail' => 'cache_cache_switcher_translation_info_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_setting_auto_sync_',
        ],
    ],
    'language_settings' => [
        'keys' => [
            'paginate' => 'cache_paginate_language_settings_',
            'detail' => 'cache_cache_language_settings_',
        ],
        'tags' => [
            'paginate' => 'cache_tags_language_settings_',
        ],
    ],
    'statistic' => [
        'keys' => [
            'detail' => 'cache_statistic'
        ]
    ]
];
