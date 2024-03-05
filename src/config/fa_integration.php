<?php

return [
    'ali_review' => [
        'url_front' => env('ALIREVIEW_API_URL_FRONT'),
        'jwt_front' => env('ALIREVIEW_JWT_FRONT', 'base64:Sb5BFDu29jb6oCWmjQAfLfeSgxYWXip29qFHafHK0ic='),
    ],
    'swift' => [
        'url' => env('SWIFT_API_URL', 'https://swift-dev-api.perfectapps.io/api'),
        'jwt' => env('SWIFT_API_JWT', '8888fqqesQaDsUsgpksJyJQH4NLbhn4nVfSu'),
    ],
    'portal' => [
        'url' => env('PORTAL_API_URL', 'https://api-dev-experts.onecommerce.io/portal'),
        'name' => env('PORTAL_CLIENT_NAME', 'portal_transcy'),
        'jwt' => env('PORTAL_CLIENT_SECRET_KEY', 'O95imgKYMwN0zXa4Q8ampKvLW4MKVlnLwIqinRbus9l5VGCg9NY0FbhQ1VPmhTtQ'),
    ]
];
