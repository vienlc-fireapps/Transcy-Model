<?php

return [
    'support_mail' => [
        'success@perfectapps.io'
    ],
    'support_cc_mails' => [
        'quangpn1@firegroup.io',
        'support@fireapps.vn',
        // 'vienlc@firegroup.io'
    ],
    'supported_languages' => [
        'en',
        'fr',
        'de',
        'ja',
        'vi',
        'zh-CN',
        'zh-TW',
        'ca',
        'es',
        'it',
        'nl'
    ],
    'price' => 0.06,
    'dutch_price' => 0.08,
    'de_to_fr_price' => 0.08,
    'it_to_zh_cn_price' => 0.1,
    'ticket_status' => [
        'TRANSLATION_REVIEWED' => 10,
        'REQUEST_RECEIVED' => 2,
    ],
    'content_status' => [
        'TO_DO' => 7,
        'REVIEW_DONE' => 8,
        'FIXED' => 9,
    ],
    'resources' => [
        [
            'id' => 'PRODUCT',
            'label' => 'Products',
            'priority' => 1,
            'is_sub' => false,
        ],
        [
            'id' => 'COLLECTION',
            'label' => 'Collections',
            'priority' => 2,
            'is_sub' => false,
        ],
        [
            'id' => 'THIRD_PARTY_APP',
            'label' => 'Third party app',
            'priority' => 3,
            'is_sub' => false,
        ],
        [
            'id' => 'BLOG',
            'label' => 'Blog posts',
            'priority' => 4,
            'is_sub' => true,
            'list' => [
                [
                    'id' => 'ONLINE_STORE_BLOG',
                    'label' => 'Blog categories',
                    'is_group' => false
                ],
                [
                    'id' => 'ONLINE_STORE_ARTICLE',
                    'label' => 'Blog posts',
                    'is_group' => false
                ]
            ]
        ],
        [
            'id' => 'ONLINE_STORE_PAGE',
            'label' => 'Pages',
            'priority' => 5,
            'is_sub' => false
        ],
        [
            'id' => 'NAVIGATION',
            'label' => 'Navigation',
            'priority' => 6,
            'is_sub' => true,
            'list' => [
                [
                    'id' => 'ONLINE_STORE_MENU',
                    'label' => 'Menu',
                    'is_group' => false
                ],
                [
                    'id' => 'LINK',
                    'label' => 'Menu items',
                    'is_group' => false
                ],
                [
                    'id' => 'FILTER',
                    'label' => 'Filters',
                    'is_group' => false
                ]
            ]
        ],
        [
            'id' => 'SHOP',
            'label' => 'Preferences',
            'priority' => 7,
            'is_sub' => false
        ],
        [
            'id' => 'PAYMENT_GATEWAY',
            'label' => 'Payments',
            'priority' => 8,
            'is_sub' => false
        ],
        [
            'id' => 'SHIPPING',
            'label' => 'Shipping and delivery',
            'priority' => 9,
            'is_sub' => true,
            'list' => [
                [
                    'id' => 'DELIVERY_METHOD_DEFINITION',
                    'label' => 'Delivery methods',
                    'is_group' => false
                ],
                [
                    'id' => 'PACKING_SLIP_TEMPLATE',
                    'label' => 'Packing slip template',
                    'is_group' => false
                ]
            ]
        ],
        [
            'id' => 'NOTIFICATION',
            'label' => 'Notifications',
            'priority' => 10,
            'is_sub' => true,
            'list' => [
                [
                    'id' => 'EMAIL_TEMPLATE',
                    'label' => 'Email notifications',
                    'is_group' => false
                ]
            ]
        ],
        [
            'id' => 'METAFIELD',
            'label' => 'Metafields',
            'priority' => 11,
            'is_sub' => true,
            'list' => []
        ],
        [
            'id' => 'SHOP_POLICY',
            'label' => 'Policies',
            'priority' => 12,
            'is_sub' => false
        ],
        [
            'id' => 'THEME',
            'label' => 'Themes',
            'priority' => 13,
            'is_sub' => true,
            'list' => [
                [
                    'id' => 'theme_content',
                    'label' => 'Theme content',
                    'is_group' => true
                ],
                [
                    'id' => 'custom_content',
                    'label' => 'Custom content',
                    'is_group' => true
                ],
                [
                    'id' => 'transcy_switcher',
                    'label' => 'Transcy switcher',
                    'is_group' => false
                ],
                [
                    'id' => 'transcy_cart_page_notification',
                    'label' => 'Transcy cart page notification',
                    'is_group' => false
                ]
            ]
        ],
    ]
];
