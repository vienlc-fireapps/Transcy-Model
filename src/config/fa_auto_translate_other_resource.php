<?php

return [
    [
        'id' => 'THEME',
        'label' => 'Themes',
        'priority' => 1,
        'is_sub_resource' => true,
        'list' => [
            [
                'id' => 'THEME_CONTENT',
                'title' => 'Theme content'
            ],
            [
                'id' => 'CUSTOM_CONTENT',
                'title' => 'Custom content'
            ],
        ]
    ],
    [
        'id' => 'BLOG',
        'label' => 'Blog posts',
        'priority' => 2,
        'is_sub_resource' => true,
        'list' => [
            [
                'id' => 'ONLINE_STORE_BLOG',
                'title' => 'Blog categories'
            ],
            [
                'id' => 'ONLINE_STORE_ARTICLE',
                'title' => 'Blog posts'
            ]
        ]
    ],
    [
        'id' => 'ONLINE_STORE_PAGE',
        'label' => 'Pages',
        'priority' => 3,
        'is_sub_resource' => false
    ],
    [
        'id' => 'NAVIGATION',
        'label' => 'Navigation',
        'priority' => 4,
        'is_sub_resource' => true,
        'list' => [
            [
                'id' => 'ONLINE_STORE_MENU',
                'title' => 'Menu',
            ],
            [
                'id' => 'LINK',
                'title' => 'Menu items',
            ]
        ]
    ],
    [
        'id' => 'SHOP',
        'label' => 'Preferences',
        'priority' => 5,
        'is_sub_resource' => false
    ],
    [
        'id' => 'PAYMENT_GATEWAY',
        'label' => 'Payments',
        'priority' => 6,
        'is_sub_resource' => false
    ],
    [
        'id' => 'SHIPPING',
        'label' => 'Shipping and delivery',
        'priority' => 7,
        'is_sub_resource' => true,
        'list' => [
            [
                'id' => 'DELIVERY_METHOD_DEFINITION',
                'title' => 'Delivery methods',
            ],
            [
                'id' => 'PACKING_SLIP_TEMPLATE',
                'title' => 'Packing slip template',
            ]
        ]
    ],
    [
        'id' => 'NOTIFICATION',
        'label' => 'Notifications',
        'priority' => 8,
        'is_sub_resource' => true,
        'list' => [
            [
                'id' => 'EMAIL_TEMPLATE',
                'title' => 'Email notifications',
            ]
        ]
    ],
    [
        'id' => 'SHOP_POLICY',
        'label' => 'Policies',
        'priority' => 10,
        'is_sub_resource' => false
    ],
];
