<?php

// get info via url: https://go.crisp.chat/account/token/
return [
    'identifier' => env('CRISP_CHAT_IDENTIFIER', '11f5f18a-129f-4c86-98d4-40cba8f370f5'),
    'key' => env('CRISP_CHAT_KEY', 'e80ae9b3941cc907c56b7342da11b73d62f93d9168da686029f6f38094343281'),
    'prefix' => env('CRISP_CHAT_PREFIX', 'tc_'),
    'websiteId' => env('CRISP_CHAT_WEBSITEID', 'f5733b35-0234-49e3-aca0-ed27b30b8ee1'),

    'identifier_old' => env('CRISP_CHAT_IDENTIFIER', 'd0a6feca-a048-4f0c-be9e-49c9c968d6b4'),
    'key_old' => env('CRISP_CHAT_KEY', 'd3cea291bb5273ed2e85012e9c198b069ac294b6c1ce6a6fd03826bdbfe599dc'),
    'websiteId_old' => env('CRISP_CHAT_WEBSITEID', 'd0929417-5a55-4927-8e27-af8a02853726'),

];
