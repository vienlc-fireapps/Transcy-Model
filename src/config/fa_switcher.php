<?php

return [
    'app_embed' => [
        // default id dev
        'id_block' => env('ID_BLOCK_APP_EMBED', '3847134708050210359'),
        'path' => 'config/settings_data.json',
        // setting for PROD
        "3847134708050210359" => [
            "type" => "shopify://apps/transcy-ai-language-translate/blocks/switcher_embed_block/bce4f1c0-c18c-43b0-b0b2-a1aefaa44573",
            "disabled" => true,
            "settings" => []
        ],
        // setting for STAG
        "15045215731822257316" => [
            "type" => "shopify://apps/transcy-uat-v4/blocks/switcher_embed_block/79960145-37fa-4322-b3fe-cb24de6e37d8",
            "disabled" => true,
            "settings" => []
        ],
        // setting for DEV
        "2116868688822405437" => [
            "type" => "shopify://apps/transcy-dev-v4/blocks/switcher_embed_block/b5ecd5cb-f807-4a08-a4dc-6aa5d1921bb0",
            "disabled" => true,
            "settings" => []
        ],
        "2793484185324183118" => [
            "type" => "shopify://apps/transcy-local-for-frontent/blocks/switcher_embed_block/00247d1c-5b17-40b7-a1c9-6b28b7d61fc0",
            "disabled" => true,
            "settings" => []
        ]
    ]
];
