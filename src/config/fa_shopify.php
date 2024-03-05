<?php

return [
    'api_version' => '2023-10',
    'asset_api_version' => '2023-10',
    'scopes' => [
        'read_themes',
        'read_products',
        'read_content',
        'write_content',
        'read_orders',
        'read_customers',
        'write_locales',
        'read_translations',
        'write_translations',
        'read_files',
        'write_files',
        'read_markets',
        'write_markets',
        'read_publications'
    ],
    // nếu thêm scope thì cần tăng version ở key_scope
    'key_scope' => 'store_update_scope_v2',
    // bật tắt các service trong app
    'services_active' => [
        'product' => true,
        'discount' => false,
        'customer' => false,
        'order' => false,
        'collection' => true,
    ],
    'plans_uninstall_app' => [
        'frozen',
        'cancelled',
        'fraudulent',
        'paused',
        // 'dormant',
        'closed'
    ],

    'type_replace_content_translate' => [
        'EMAIL_TEMPLATE',
        'SMS_TEMPLATE',
    ],

    'list_str_find_theme_translate' => [
        '“{{ ',
        '“{{',
        '“%{ ',
        '“%{',
        '{{ ',
        '{{',
        '%{ ',
        '%{',
        '{% ',
        '{%',

        ' }}”',
        '}}”',
        ' }”',
        '}”',
        ' }}',
        '}}',
        ' }',
        '}',
        ' %}',
        '%}'
    ],

    // random key
    'list_str_replace_theme_translate' => [
        '<p1',
        '<p2',
        '<p3',
        '<p4',
        '<p5',
        '<p6',
        '<p7',
        '<p8',
        '<p9',
        '<p10',

        '</p1>',
        '</p2>',
        '</p3>',
        '</p4>',
        '</p5>',
        '</p6>',
        '</p7>',
        '</p8>',
        '</p9>',
        '</p10>',
    ],

    // English, Chinese, Russian, Portuguese, Spanish, French, German, Italian, Dutch, Turkish, Japanese, Korean, Thai, Vietnamese, Arabic, Hebrew, Polish
    "popular_languages_code" => ["en", "zh-CN", "zh-TW", "ru", "pt-BR", "pt-PT", "es", "fr", "de", "it", "nl", "tr", "ja", "ko", "th", "vi", "ar", "he", "pl"],

    "popular_languages_code_and_name" => [
        [
            'isoCode' => 'en',
            'name' => 'English'
        ],
        [
            'isoCode' => 'zh-CN',
            'name' => 'Chinese (Simplified)'
        ],
        [
            'isoCode' => 'zh-TW',
            'name' => 'Chinese (Traditional)'
        ],
        [
            'isoCode' => 'ru',
            'name' => 'Russian'
        ],
        [
            'isoCode' => 'pt-BR',
            'name' => 'Portuguese (Brazil)'
        ],
        [
            'isoCode' => 'pt-PT',
            'name' => 'Portuguese (Portugal)'
        ],
        [
            'isoCode' => 'es',
            'name' => 'Spanish'
        ],
        [
            'isoCode' => 'fr',
            'name' => 'French'
        ],
        [
            'isoCode' => 'de',
            'name' => 'German'
        ],
        [
            'isoCode' => 'it',
            'name' => 'Italian'
        ],
        [
            'isoCode' => 'nl',
            'name' => 'Dutch'
        ],
        [
            'isoCode' => 'tr',
            'name' => 'Turkish'
        ],
        [
            'isoCode' => 'ja',
            'name' => 'Japanese'
        ],
        [
            'isoCode' => 'ko',
            'name' => 'Korean'
        ],
        [
            'isoCode' => 'th',
            'name' => 'Thai'
        ],
        [
            'isoCode' => 'vi',
            'name' => 'Vietnamese'
        ],
        [
            'isoCode' => 'ar',
            'name' => 'Arabic'
        ],
        [
            'isoCode' => 'he',
            'name' => 'Hebrew'
        ],
        [
            'isoCode' => 'pl',
            'name' => 'Polish'
        ],
    ],
    // "United States", "List Euro Countries", "Japan", "United Kingdom", "Australia", "Canada", "Switzerland", "China", "Hong Kong", "New Zealand", "Sweden", "Korea, South", "Singapore", "Norway", "Mexico", "India", "Russia", "South Africa", "Turkey", "Brazil", "Taiwan", "Denmark", "Poland", "Thailand", "Indonesia", "Hungary", "Czech Republic", "Israel", "Chile", "Philippines", "Colombia", "Saudi Arabia", "Malaysia", "Romania"
    "popular_currencies_code" => ["USD", "EUR", "JPY", "GBP", "AUD", "CAD", "CHF", "CNY", "HKD", "NZD", "SEK", "KRW", "SGD", "NOK", "MXN", "INR", "RUB", "ZAR", "TRY", "BRL", "TWD", "DKK", "PLN", "THB", "IDR", "HUF", "CZK", "ILS", "CLP", "PHP", "COP", "SAR", "MYR", "RON"],

    "hieroglyphics_languages" => [
        "ar", "zh-CN", "zh-TW", "zh", "he", "ja", "ko", "th",
        "am", "hy", "as", "my", "ce", "dz", "ka", "gu", "ha", "hi", "kn", "ks", "kk", "km", "ky", "lo", "ml", "mr", "ne", "or", "os", "ps", "fa", "pa", "sd", "si", "ta", "te", "bo", "ti", "ur", "ug", "yi"
    ],

    'media_upload_type' => ['jpg', 'gif', 'png', 'jpeg'],

    // GET list from https://cloud.google.com/translate/docs/languages
    // The data is the same as:
    // $filePopularLanguagesPath = base_path() . "/packages/fireapps/origin-app/src/Configs/" . 'google-supported-popular-languages-translate.json';
    // $fileOtherLanguagesPath = base_path() . "/packages/fireapps/origin-app/src/Configs/" . 'google-supported-other-languages-translate.json';
    'language_google_support_translate' => [
        "af", "sq", "am", "ar", "hy", "az", "eu", "be", "bn", "bs", "bg", "ca", "ceb", "zh-CN", "zh-TW", "co", "hr", "cs", "da", "nl", "en", "eo", "et", "fi", "fr", "fy", "gl", "ka", "de", "el", "gu", "ht",
        "ha", "haw", "he", "hi", "hmn", "hu", "is", "ig", "id", "ga", "it", "ja", "jv", "kn", "kk", "km", "rw", "ko", "ku", "ky", "lo", "la", "lv", "lt", "lb", "mk", "mg", "ms", "ml", "mt", "mi", "mr", "mn",
        "my", "ne", "no", "ny", "or", "ps", "fa", "pl", "pt", "pa", "ro", "ru", "sm", "gd", "sr", "st", "sn", "sd", "si", "sk", "sl", "so", "es", "su", "sw", "sv", "tl", "tg", "ta", "tt", "te", "th", "tr",
        "tk", "uk", "ur", "ug", "uz", "vi", "cy", "xh", "yi", "yo", "zu", 'pt-BR', 'pt-PT', 'nn', 'nb', 'zh', 'lt-LT', 'ro-RO', 'es-US', 'te', 'qu'
    ],
    'folder_media' => "medias",
    'compress_img_with_tinify' => true,
    'language_add_target_language' => ["af", "ak", "sq", "am", "ar", "hy", "as", "az", "bm", "bn", "eu", "be", "bs", "br", "bg", "my", "ca", "ce", "zh-CN", "zh-TW", "cu", "kw", "hr", "cs", "da", "nl", "dz", "en", "eo", "et", "ee", "fo", "fi", "fr", "ff", "gl", "lg", "ka", "de", "el", "gu", "ha", "he", "hi", "hu", "is", "ig", "id", "ia", "ga", "it", "ja", "jv", "kl", "kn", "ks", "kk", "km", "ki", "rw", "ko", "ku", "ky", "lo", "lv", "ln", "lt", "lu", "lb", "mk", "mg", "ms", "ml", "mt", "gv", "mi", "mr", "mn", "ne", "nd", "se", "no", "nb", "nn", "or", "om", "os", "ps", "fa", "pl", "pt-BR", "pt-PT", "pa", "qu", "ro", "rm", "ru", "sg", "gd", "sr", "sn", "ii", "sd", "si", "sk", "sl", "so", "es", "sw", "sv", "tg", "ta", "tt", "te", "th", "bo", "ti", "to", "tr", "tk", "uk", "ur", "ug", "uz", "vi", "vo", "cy", "fy", "wo", "xh", "yi", "yo", "zu", "fil"],
];
