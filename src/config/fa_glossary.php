<?php

return [
    'list_all_resource' => [
        'PRODUCT',
        'COLLECTION',
        'TRANSCY_INTEGRATION',
        'THEME_CONTENT',
        'CUSTOM_CONTENT',
        'TRANSCY_SWITCHER',
        'TRANSCY_CART_PAGE_NOTIFICATION',
        'ONLINE_STORE_BLOG',
        'ONLINE_STORE_ARTICLE',
        'ONLINE_STORE_MENU',
        'LINK',
        'FILTER',
        'ONLINE_STORE_PAGE',
        'SHOP',
        'SHIPPING',
        'EMAIL_TEMPLATE',
        'SHOP_POLICY',
        'METAFIELD',
        'METAOBJECT',
        'PAYMENT_GATEWAY',
        'DELIVERY_METHOD_DEFINITION',
        'PACKING_SLIP_TEMPLATE'
    ],
    "translation_type" => [
        "always" => "always",
        "never"  => "never"
    ],
    'list_menu_resource_glossary' => [
        "Auto Sync" => [
            "PRODUCT" => [
                'id' => "PRODUCT",
                'title' => "Products",
            ],
            "COLLECTION" => [
                'id' => "COLLECTION",
                'title' => "Collections",

            ],
            "TRANSCY_INTEGRATION" => [
                'id' => "TRANSCY_INTEGRATION",
                'title' => "Transcy integration",
            ]
        ],
        "Manual Sync" => [
            "themes" => [
                "title" => "Themes",
                "data" => [
                    "THEME_CONTENT" => [
                        'id' => "THEME_CONTENT",
                        "title" => "Themes content"
                    ],
                    "CUSTOM_CONTENT" => [
                        'id' => "CUSTOM_CONTENT",
                        "title" => "Custom Content"
                    ],
                    "TRANSCY_SWITCHER" => [
                        'id' => "TRANSCY_SWITCHER",
                        "title" => "Transcy Switcher"
                    ],
                    "TRANSCY_CART_PAGE_NOTIFICATION" => [
                        'id' => "TRANSCY_CART_PAGE_NOTIFICATION",
                        "title" => "Transcy cart page notification"
                    ],
                ]
            ],
            "blog" => [
                "title" => "Blog posts",
                "data" => [
                    "ONLINE_STORE_BLOG" => [
                        'id' => "ONLINE_STORE_BLOG",
                        "title" => "Blog Categories"
                    ],
                    "ONLINE_STORE_ARTICLE" => [
                        'id' => "ONLINE_STORE_ARTICLE",
                        "title" => "Blog posts"
                    ]
                ]
            ],
            "link" => [
                "title" => "Navigation",
                "data" => [
                    "ONLINE_STORE_MENU" => [
                        'id' => "ONLINE_STORE_MENU",
                        "title" => "Menus"
                    ],
                    "LINK" => [
                        'id' => "LINK",
                        "title" => "Menu Items"
                    ],
                    "FILTER" => [
                        'id' => "FILTER",
                        "title" => "Filters"
                    ]
                ]
            ],
            "page" => [
                "title" => "Pages",
                "id" => "ONLINE_STORE_PAGE"
            ],
            "shop" => [
                "title" => "Preferences",
                "id" => "SHOP"
            ],
            "shipping" => [
                "title" => "Shipping and delivery",
                "data" => [
                    'DELIVERY_METHOD_DEFINITION' => [
                        'title' => 'Delivery methods',
                        'id' => 'DELIVERY_METHOD_DEFINITION'
                    ],
                    'SHIPPING' => [
                        'title' => 'Packing slip template',
                        'id' => 'PACKING_SLIP_TEMPLATE'
                    ]
                ]
            ],
            "notifications" => [
                "title" => "Notifications",
                "data" => [
                    "EMAIL_TEMPLATE" => [
                        'id' => "EMAIL_TEMPLATE",
                        "title" => "Email notifications"
                    ]
                ]
            ],
            "policies" => [
                "title" => "Policies",
                "id" => "SHOP_POLICY"
            ],
            "metafield" => [
                "title" => "Shop Metafield",
                "id" => "METAFIELD"
            ],
            "METAOBJECT" => [
                "title" => "Metaobject",
                "id" => "METAOBJECT"
            ],
            "payment_gateway" => [
                "title" => "Payment Gateway",
                "id" => "PAYMENT_GATEWAY"
            ],
        ]
    ]
];
