<?php

return [
    'kafka_url' => env('KAFKA_CONNECT_URL'),
    'kafka_topic' => env('KAKA_TOPIC', 'products'),
    'kafka_group' => env('KAFKA_GROUP_ID', 'transcy'),
    'app_env' => env('APP_ENV', 'local'),
    'hook_token' => env('HOOK_TOKEN', '12345'),
    'cache' => [
        'list_store_key' => 'list_store',
        'list_store_session' => 'list_store_session',
        'list_valid_sessions' => 'list_sessions',
        'store_detail_key' => 'store_detail',
        'count_result_product_key' => 'product_count_result',
        'count_result_homepage_key' => 'home_page_count_result',
        'count_result_link_key' => 'link_count_result_',
        'count_result_online_store_page_key' => 'online_store_page_count_result',
        'count_result_delivery_method_key' => 'delivery_method_count_result_',
        'count_result_payment_gateway_key' => 'payment_gateway_count_result_',
        'list_store_rule' => 'store_translation_rule_',
        'list_store_rule_priority' => 'store_translation_rule_priority_',
        'list_locale_sync' => 'list_locale_sync_',
        'assign_locale_to_market' => 'assign_locale_to_market'
    ],
    'count_result_store_theme' => [
        'HOME_PAGE' => 'home_page_count_result',
        'CART_PAGE' => 'cart_page_count_result',
        'CHECKOUT_PAGE' => 'checkout_page_count_result',
        'ONLINE_STORE_THEME' => 'online_store_theme_count_result',
        'SYSTEM' => 'system_count_result',
        'SECTIONS' => 'sections_count_result',
        'GENERAL' => 'general_count_result',
        'BLOGS' => 'blogs_count_result',
        'PRODUCTS' => 'store_theme_product_count_result',
        'CUSTOMER' => 'customer_count_result',
        'GIFT_CARDS' => 'gift_cards_theme_count_result',
        'OTHER_PAGE' => 'other_page_count_result'
    ],
    'google_speed_key' => env('GOOGLE_APP_SPEED_KEY'),
    'element_status' => [
        'HOME_PAGE' => [
            'key_waiting' => 'list_home_page_waiting_',
            'key_type' => 'list_home_page_waiting_type_',
            'key_processing' => 'list_home_page_process_',
        ],
        'PRODUCT' => [
            'key_waiting' => 'list_product_waiting_',
            'key_type' => 'list_product_waiting_type_',
            'key_processing' => 'list_product_process_'
        ],
        'COLLECTION' => [
            'key_waiting' => 'list_collection_waiting_',
            'key_type' => 'list_collection_waiting_type_',
            'key_processing' => 'list_collection_process_',
            'key_hash_status' => 'list_data_status_resource_type_collection_',
        ],
        'CART_PAGE' => [
            'key_waiting' => 'list_cart_page_waiting_',
            'key_type' => 'list_cart_page_waiting_type_',
            'key_processing' => 'list_cart_page_process_'
        ],
        'CHECKOUT_PAGE' => [
            'key_waiting' => 'list_checkout_page_waiting_',
            'key_type' => 'list_checkout_page_waiting_type_',
            'key_processing' => 'list_checkout_page_process_'
        ],
        'ONLINE_STORE_THEME' => [
            'key_waiting' => 'list_store_theme_waiting_',
            'key_type' => 'list_store_theme_waiting_type_',
            'key_processing' => 'list_store_theme_process_'
        ],
        'LINK' => [
            'key_waiting' => 'list_resource_type_link_waiting_',
            'key_type' => 'list_resource_type_link_waiting_type_',
            'key_processing' => 'list_resource_type_link_process_',
            'key_hash_status' => 'list_data_status_resource_type_link_',
        ],
        'ONLINE_STORE_PAGE' => [
            'key_waiting' => 'list_resource_type_online_store_page_waiting_',
            'key_type' => 'list_resource_type_online_store_page_waiting_type_',
            'key_processing' => 'list_resource_type_online_store_page_process_',
            'key_hash_status' => 'list_data_status_resource_type_online_store_page_',
        ],
        'DELIVERY_METHOD_DEFINITION' => [
            'key_waiting' => 'list_resource_type_delivery_method_definition_waiting_',
            'key_type' => 'list_resource_type_delivery_method_definition_waiting_type_',
            'key_processing' => 'list_resource_type_delivery_method_definition_process_',
            'key_hash_status' => 'list_data_status_resource_type_delivery_method_',
        ],
        'PAYMENT_GATEWAY' => [
            'key_waiting' => 'list_resource_type_payment_gateway_waiting_',
            'key_type' => 'list_resource_type_payment_gateway_waiting_type_',
            'key_processing' => 'list_resource_type_payment_gateway_process_',
            'key_hash_status' => 'list_data_status_resource_type_payment_gateway_',
        ],
        'METAFIELD' => [
            'key_waiting' => 'list_resource_type_metafield_waiting_',
            'key_type' => 'list_resource_type_metafield_waiting_type_',
            'key_processing' => 'list_resource_type_metafield_process_',
            'key_hash_status' => 'list_data_status_resource_type_metafield_',
        ],
        'ONLINE_STORE_ARTICLE' => [
            'key_waiting' => 'list_resource_type_online_store_article_waiting_',
            'key_type' => 'list_resource_type_online_store_article_waiting_type_',
            'key_processing' => 'list_resource_type_online_store_article_process_',
            'key_hash_status' => 'list_data_status_resource_type_online_store_article_',
        ],
        'ONLINE_STORE_BLOG' => [
            'key_waiting' => 'list_resource_type_online_store_blog_waiting_',
            'key_type' => 'list_resource_type_online_store_blog_waiting_type_',
            'key_processing' => 'list_resource_type_online_store_blog_process_',
            'key_hash_status' => 'list_data_status_resource_type_online_store_blog_',
        ],
        'ONLINE_STORE_MENU' => [
            'key_waiting' => 'list_resource_type_online_store_menu_waiting_',
            'key_type' => 'list_resource_type_online_store_menu_waiting_type_',
            'key_processing' => 'list_resource_type_online_store_menu_process_'
        ],
        'SHOP' => [
            'key_waiting' => 'list_resource_type_shop_waiting_',
            'key_type' => 'list_resource_type_shop_waiting_type_',
            'key_processing' => 'list_resource_type_shop_process_',
            'key_hash_status' => 'list_data_status_resource_type_shop_',
        ],
        'SHOP_POLICY' => [
            'key_waiting' => 'list_resource_type_shop_policy_waiting_',
            'key_type' => 'list_resource_type_shop_policy_waiting_type_',
            'key_processing' => 'list_resource_type_shop_policy_process_'
        ],
        'EMAIL_TEMPLATE' => [
            'key_waiting' => 'list_resource_type_email_template_waiting_',
            'key_type' => 'list_resource_type_email_template_waiting_type_',
            'key_processing' => 'list_resource_type_email_template_process_',
            'key_hash_status' => 'list_data_status_resource_type_email_template_',
        ],
        'PACKING_SLIP_TEMPLATE' => [
            'key_waiting' => 'list_resource_type_packing_slip_template_waiting_',
            'key_type' => 'list_resource_type_packing_slip_template_waiting_type_',
            'key_processing' => 'list_resource_type_packing_slip_template_process_'
        ],
        'TRANSCY_SWITCHER' => [
            'key_waiting' => 'list_resource_type_transcy_switcher_waiting_',
            'key_type' => 'list_resource_type_transcy_switcher_waiting_type_',
            'key_processing' => 'list_resource_type_transcy_switcher_process_'
        ],
        'SWITCHER_TRANSLATION' => [
            'key_waiting' => 'list_resource_type_switcher_translation_waiting_',
            'key_type' => 'list_resource_type_switcher_translation_waiting_type_',
            'key_processing' => 'list_resource_type_switcher_translation_process_'
        ],
        'RECOMMENDATION' => [
            'key_waiting' => 'list_resource_type_recommendation_waiting_',
            'key_type' => 'list_resource_type_recommendation_waiting_type_',
            'key_processing' => 'list_resource_type_recommendation_process_'
        ],
        'CHANGE_COUNTRY' => [
            'key_waiting' => 'list_resource_type_change_country_waiting_',
            'key_type' => 'list_resource_type_change_country_waiting_type_',
            'key_processing' => 'list_resource_type_change_country_process_'
        ],
        'TRANSCY_CART_PAGE_NOTIFICATION' => [
            'key_waiting' => 'list_resource_type_transcy_cart_page_notification_waiting_',
            'key_type' => 'list_resource_type_transcy_cart_page_notification_waiting_type_',
            'key_processing' => 'list_resource_type_transcy_cart_page_notification_process_'
        ],
        'THIRD_PARTY_APP' => [
            'key_waiting' => 'list_resource_type_3rd_waiting_',
            'key_type' => 'list_resource_type_3rd_waiting_type_',
            'key_processing' => 'list_resource_type_3rd_process_'
        ],
        'FILTER' => [
            'key_waiting' => 'list_resource_type_filter_waiting_',
            'key_type' => 'list_resource_type_filter_waiting_type_',
            'key_processing' => 'list_resource_type_filter_process_',
            'key_hash_status' => 'list_data_status_resource_type_filter_',
        ],
        'METAOBJECT' => [
            'key_waiting' => 'list_resource_type_metaobject_waiting_',
            'key_type' => 'list_resource_type_metaobject_waiting_type_',
            'key_processing' => 'list_resource_type_metaobject_process_',
            'key_hash_status' => 'list_data_status_resource_type_metaobject_',
        ],
    ],
    'element_pattern' => [
        'HOME_PAGE' => '/^section\./',
        'CART_PAGE' => '/cart\./',
        'CHECKOUT_PAGE' => '/^shopify\.checkout\./',
        'SYSTEM' => '/^shopify\./',
        'SECTIONS' => '/^sections\./',
        'GENERAL' => '/^general\./',
        'BLOGS' => '/^blogs\./',
        'PRODUCTS' => '/^products\./',
        'CUSTOMER' => '/^customer\./',
        'GIFT_CARDS' => '/^gift_cards\./',
        'OTHER_PAGE' => '/^newsletter\.|^accessibility\.|^onboarding\.|^templates\.|^localization\./'
    ],
    'store_theme_element' => [
        'ONLINE_STORE_THEME' => [
            'SYSTEM',
            'SECTIONS',
            'GENERAL',
            'BLOGS',
            'PRODUCTS',
            'CUSTOMER',
            'GIFT_CARDS',
            'OTHER_PAGE'
        ],
        'HOME_PAGE' => ['HOME_PAGE'],
        'CHECKOUT_PAGE' => ['CHECKOUT_PAGE'],
        'CART_PAGE' => ['CART_PAGE'],
        'SYSTEM' => ['SYSTEM'],
        'SECTIONS' => ['SECTIONS'],
        'GENERAL' => ['GENERAL'],
        'BLOGS' => ['BLOGS'],
        'PRODUCTS' => ['PRODUCTS'],
        'CUSTOMER' => ['CUSTOMER'],
        'GIFT_CARDS' => ['GIFT_CARDS'],
        'OTHER_PAGE' => ['OTHER_PAGE']
    ],
    'store_theme_refer_key' => [
        'ONLINE_STORE_THEME' => 'ONLINE_STORE_THEME',
        'HOME_PAGE' => 'HOME_PAGE',
        'CART_PAGE' => 'CART_PAGE',
        'CHECKOUT_PAGE' => 'CHECKOUT_PAGE',
        'SYSTEM' => 'ONLINE_STORE_THEME',
        'SECTIONS' => 'ONLINE_STORE_THEME',
        'GENERAL' => 'ONLINE_STORE_THEME',
        'BLOGS' => 'ONLINE_STORE_THEME',
        'PRODUCTS' => 'ONLINE_STORE_THEME',
        'CUSTOMER' => 'ONLINE_STORE_THEME',
        'GIFT_CARDS' => 'ONLINE_STORE_THEME',
        'OTHER_PAGE' => 'ONLINE_STORE_THEME',
        'THIRD_PARTY_APP' => 'THIRD_PARTY_APP'
    ],
    'element_title' => [
        'SYSTEM' => 'System',
        'GENERAL' => 'General',
        'BLOGS' => 'Blogs',
        'CHECKOUT_PAGE' => 'Checkout Page',
        'HOME_PAGE' => 'Home Page',
        'CART_PAGE' => 'Cart Page',
        'COLLECTIONS' => 'Collections',
        'CONTACT' => 'Contact',
        'CUSTOMER' => 'Customer',
        'LAYOUT' => 'Layout',
        'PRODUCTS' => 'Products',
        'SECTIONS' => 'Sections',
        'GIFT_CARDS' => 'Gift Cards',
        'DATE_FORMAT' => 'Date Formats',
        'PAGE_TYPE' => 'Page type',
        'OTHER_PAGE' => 'Other Pages'
    ],
    'resource_reference' => [
        'LINK' => [
            'element' => 'title',
            'resource' => 'gid://shopify/Link/',
            'key_count_result' => 'link_count_result_'
        ],
        'ONLINE_STORE_MENU' => [
            'element' => 'title',
            'resource' => 'gid://shopify/OnlineStoreMenu/',
            'key_count_result' => 'online_store_menu_count_result_'
        ],
        'METAFIELD' => [
            'key_count_result' => 'metafield_count_result_',
        ],
        'DELIVERY_METHOD_DEFINITION' => [
            'element' => 'name',
            'resource' => 'gid://shopify/DeliveryMethodDefinition/',
            'key_count_result' => 'delivery_method_count_result_'
        ],
        'PAYMENT_GATEWAY' => [
            'element' => 'name',
            'resource' => 'gid://shopify/PaymentGateway/',
            'key_count_result' => 'payment_gateway_count_result_'
        ],
        'PACKING_SLIP_TEMPLATE' => [
            'element' => 'body',
            'resource' => 'gid://shopify/PackingSlipTemplate/',
            'key_count_result' => 'packing_slip_template_count_result_'
        ],
        'SHOP_POLICY' => [
            'element' => 'body',
            'resource' => 'gid://shopify/ShopPolicy/',
            'key_count_result' => 'shop_policy_count_result_'
        ],
        'EMAIL_TEMPLATE' => [
            'element' => ['title', 'body_html'],
            'resource' => 'gid://shopify/EmailTemplate/',
            'key_count_result' => 'email_template_count_result_'
        ],
        'ONLINE_STORE_PAGE' => [
            'element' => ['title', 'body_html', 'handle', 'meta_title', 'meta_description'],
            'resource' => 'gid://shopify/OnlineStorePage/',
            'key_count_result' => 'online_store_page_count_result_'
        ],
        'ONLINE_STORE_BLOG' => [
            'element' => ['title', 'meta_title', 'handle', 'meta_description'],
            'resource' => 'gid://shopify/OnlineStoreBlog/',
            'key_count_result' => 'online_store_blog_count_result_'
        ],
        'ONLINE_STORE_ARTICLE' => [
            'element' => ['title', 'body_html', 'handle', 'summary_html', 'meta_title', 'meta_description'],
            'resource' => 'gid://shopify/OnlineStoreArticle/',
            'key_count_result' => 'online_store_article_count_result_'
        ],
        'SHOP' => [
            'element' => ['meta_title', 'meta_description'],
            'resource' => 'gid://shopify/Shop/',
            'key_count_result' => 'shop_count_result_'
        ],
        'COLLECTION' => [
            'element' => ['title', 'handle', 'meta_title', 'body_html', 'meta_description'],
            'resource' => 'gid://shopify/Collection/',
            'key_count_result' => 'collection_count_result_'
        ],
        'FILTER' => [
            'element' => 'label',
            'resource' => 'gid://shopify/OnlineStoreFilterSetting/',
            'key_count_result' => 'filter_count_result_'
        ],
        'METAOBJECT' => [
            'element' => [],
            'resource' => 'gid://shopify/Metaobject/',
            'key_count_result' => 'metaobject_count_result_'
        ],
    ],
    'multi_resoure' => [
        'ONLINE_STORE_BLOG',
        'ONLINE_STORE_ARTICLE',
        'SHOP',
        'ONLINE_STORE_PAGE',
        'COLLECTION'
    ],
    'format_list' =>
    [
        'COLLECTION' => [
            'title' => 'Collection Name',
            'body_html' => 'Collection Description',
            'handle' => 'URL handle',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
        ],
        'DELIVERY_METHOD_DEFINITION' => [
            'name' => 'Name',
        ],
        'SMS_TEMPLATE' =>  [
            'title' => 'Title',
            'body_html' => 'Description',
        ],
        'EMAIL_TEMPLATE' =>  [
            'title' => 'Title',
            'body_html' => 'Description',
        ],
        'FILTER' => [
            'label' => 'Label'
        ],
        'LINK' => [
            'title' => 'Name',
        ],
        'METAFIELD' =>  [
            'value' => 'Value',
        ],
        'METAOBJECT' => [],
        'ONLINE_STORE_ARTICLE' => [
            'title' => 'Article Name',
            'body_html' => 'Description',
            'summary_html' => 'Excerpt',
            'handle' => 'URL handle',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description'
        ],
        'ONLINE_STORE_BLOG' => [
            'title' => 'Blog Name',
            'handle' => 'URL Handle',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
        ],
        'ONLINE_STORE_MENU' => [
            'title' => 'Name',
        ],
        'ONLINE_STORE_PAGE' => [
            'title' => 'Page Name',
            'body_html' => 'Description',
            'handle' => 'URL handle',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
        ],
        'PACKING_SLIP_TEMPLATE' => [
            'body' => 'Description',
        ],
        'PAYMENT_GATEWAY' => [
            'name' => 'Name',
        ],
        'PRODUCT' =>  [
            'title' => 'Product Name',
            'body_html' => 'Description',
            'handle' => 'URL handle',
            'product_type' => 'Product Type',
            'meta_title' => 'SEO Title',
            'meta_description' => 'SEO Description',
        ],
        'SHOP' => [
            'meta_title' => 'Title',
            'meta_description' => 'Description',
        ],
        'SHOP_POLICY' => [
            'body' => 'Description',
        ],
    ],
    'url_resource_type' => [
        'HOME_PAGE' => null,
        'CHECKOUT_PAGE' => null,
        'SHOP' => null,
        'LINK' => null,
        'PAYMENT_GATEWAY' => null,
        'DELIVERY_METHOD_DEFINITION' => null,
        'METAFIELD' => null,
        'ONLINE_STORE_THEME' => null,
        'SHOP_POLICY' => null,
        'PRODUCT' => 'products',
        'COLLECTION' => 'collections',
        'ONLINE_STORE_ARTICLE' => 'blogs',
        'ONLINE_STORE_BLOG' => 'blogs',
        'ONLINE_STORE_PAGE' => 'pages',
    ],
    'element_database' => [
        'products' => [
            'PRODUCTS'
        ],
        'collections' => [
            'COLLECTIONS'
        ],
        'store_themes' => [
            'HOME_PAGE',
            'CART_PAGE',
            'ONLINE_STORE_THEME',
            'CHECKOUT_PAGE'
        ],
        'other_resources' => [
            'LINK',
            'FILTER',
            'ONLINE_STORE_ARTICLE',
            'PAYMENT_GATEWAY',
            'DELIVERY_METHOD_DEFINITION',
            'SHOP',
            'ONLINE_STORE_BLOG',
            'SHOP_POLICY',
            'ONLINE_STORE_PAGE',
        ],
        'metafield' => [
            'METAFIELD'
        ]
    ],
    'element_database_v4' => [
        'products' => [
            'PRODUCT' => ['PRODUCT']
        ],
        'store_themes' => [
            'THEME' => ['ONLINE_STORE_THEME']
        ],
        'other_resources' => [
            'BLOG' => ['ONLINE_STORE_ARTICLE', 'ONLINE_STORE_BLOG'],
            'ONLINE_STORE_PAGE' => ['ONLINE_STORE_PAGE'],
            'NAVIGATION' => ['LINK', 'ONLINE_STORE_MENU', 'FILTER'],
            'SHOP' => ['SHOP'],
            'PAYMENT_GATEWAY' => ['PAYMENT_GATEWAY'],
            'SHIPPING' => ['DELIVERY_METHOD_DEFINITION', 'PACKING_SLIP_TEMPLATE'],
            'NOTIFICATION' => ['EMAIL_TEMPLATE'],
            'SHOP_POLICY' => ['SHOP_POLICY'],
            'COLLECTION' => ['COLLECTION'],
        ],
        'metafield' => [
            'METAFIELD'
        ],
        'metaobject' => [
            'METAOBJECT'
        ]
    ],
    'metafield_type' => [
        'string',
        'multi_line_text_field',
        'single_line_text_field',
        'list.single_line_text_field',
        'list.metaobject_reference'
    ]
];
