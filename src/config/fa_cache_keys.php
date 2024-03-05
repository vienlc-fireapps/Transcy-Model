<?php

return [
    'default_cache_time' => 5 * 24 * 60 * 60,
    'default_auto_tran_cache_time' => 3600,
    'list_product_translated' => 'v2_arr_ids_list_product_translated_',
    'list_media_resource_added' => 'list_media_resource_added_',
    'list_auto_translate_added' => 'list_auto_translate_added_',
    'unsupport_metafield' => "list_store_unsupport_metafield",
    'tasks' => [
        'keys' => [
            'task_info' => 'task_info',
            'list_translated' => 'list_translated_cache',
        ],
        'tags' => []
    ],
    'store' => [
        'keys' => [
            'detail' => 'cache_store_info_array_v8',
            'detail_be' => 'store_detail_be_',
            'front' => [
                'check_enable_password' => 'cache_check_store_enable_password_',
                'data_check_password' => 'cache_data_check_store_password_',
                'html' => 'cache_store_front_html_',
            ],
            're_install' => 'cache_store_free_reinstall_',
            'deepl_info' => 'deepl_info_',
            'cancel_item_process' => 'list_item_cancel_process_',
        ],
        'tags' => []
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
    'ali_review' => [
        'detail' => [
            'widget' => 'cache_id_waiting_widget',
            'page' => 'cache_id_page_widget'
        ],
        'tags' => 'cache_tags_ali_review'
    ],
    'clear_cache_by_queries' => [
        "all" => [
            "insert into `stores`",
            "update `stores`",
            "delete from `stores`",
        ],
        "store" => [
            "insert into `stores`",
            "update `stores`",
            "delete from `stores`",

            "insert `test_stores`",
            "update `test_stores`",
            "delete from `test_stores`",

            "insert `development_stores`",
            "update `development_stores`",
            "delete `development_stores`",

            "insert `store_bug`",
            "update `store_bug`",
            "delete `store_bug`",
        ],
        "switcher" => [
            "insert into `language_setting`",
            "update `language_setting`",
            "delete from `language_setting`",

            "insert into `switcher_settings`",
            "update `switcher_settings`",
            "delete from `switcher_settings`",

            "insert into `switcher_translation`",
            "update `switcher_translation`",
            "delete from `switcher_translation`",

            "insert into `unlock_feature`",
            "update `unlock_feature`",
            "delete from `unlock_feature`",

            "insert into `store_locales`",
            "update `store_locales`",
            "delete from `store_locales`",

            "insert into `currencies`",
            "update `currencies`",
            "delete from `currencies`",

            "insert into `currency_settings`",
            "update `currency_settings`",
            "delete from `currency_settings`",

            "insert into `store_currencies`",
            "update `store_currencies`",
            "delete `store_currencies`",

            "insert into `store_currency_setting`",
            "update `store_currency_setting`",
            "delete `store_currency_setting`",

            "insert into `switcher_settings_custom`",
            "update `switcher_settings_custom`",
            "delete from `switcher_settings_custom`",

            "insert into `market`",
            "update `market`",
            "delete `market`",

            "insert into `market_detail`",
            "update `market_detail`",
            "delete from `market_detail`",

            "insert `store_bug`",
            "update `store_bug`",
            "delete `store_bug`",
        ],
        "media" => [
            "insert into `media_resource`",
            "update `media_resource`",
            "delete from `media_resource`",

            "insert into `media_translate`",
            "update `media_translate`",
            "delete `media_translate`",
        ],
        "media_product" => [
            "is_translate_image",
            "is_publish_translate_image",
            "image_translations",
        ]
    ],
    'order' => [
        'keys' => [
            'count60' => 'cache_order_60_day_'
        ],

    ],
    'handle' => [
        'show_popup_handle' => 'show_popup_translate_handle',
        'show_notification_handle' => 'show_notification_translate_handle'

    ],
    'first_turn_on_switcher' => "first_on_emmbed_switcher",
    'change_currency_default' => 'list_store_change_currency_default',
    'new_content' => 'transcy:new_content:%s:%d:%s',
];
