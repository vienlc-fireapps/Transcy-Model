<?php

namespace Transcy\Models;

use Transcy\Models\Mongo\Metafield;
use Transcy\Models\Mongo\OtherResource;
use Transcy\Models\Mongo\Product;
use Carbon\Carbon;
use Exception;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Http;

class ActivityLog
{
    const STATUS = [
        'WAITING' => 1,
        'SUCCESS' => 2,
    ];

    const DTO = [
        'store_id' => 'string',
        'status' => 'integer',
        'value' => 'array',
        'action' => 'string',
        'type' => 'string'
    ];

    public const RESOURCE_NAME = [
        'PRODUCT' => 'Products',
        'COLLECTION' => 'Collections',
        //theme
        'THEME' => 'Themes',
        'theme_content' => 'Themes/Theme content',
        'custom_content' => 'Themes/Custom content',
        'shopify' => 'Checkout & system',
        'checkout' => 'Checkout & system',
        'customer_accounts' => 'Accounts (new)',
        'customer' => 'Accounts (classic)',
        'TRANSCY' => 'Themes/Transcy switcher',
        'SWITCHER_TRANSLATION' => 'Themes/Switcher',
        'RECOMMENDATION' => 'Themes/Popup recommendation',
        'transcy_cart_page_notification' => 'Themes/Transcy cart page notification',
        'BLOG' => 'Blog posts',
        'ONLINE_STORE_BLOG' => 'Blog posts/Blog categories',
        'ONLINE_STORE_ARTICLE' => 'Blog posts/Blog posts',
        'PAGES' => 'Pages',
        'ONLINE_STORE_PAGE' => 'Pages',
        'NAVIGATION' => 'Navigation',
        'ONLINE_STORE_MENU' => 'Navigation/Menus',
        'LINK' => 'Navigation/Menu items',
        'FILTER' => 'Navigation/Filters',
        'SHOP' => 'Preferences',
        'PAYMENT_GATEWAY' => 'Payments',
        'SHIPPING' => 'Shipping and delivery',
        'DELIVERY_METHOD_DEFINITION' => 'Shipping and delivery/Delivery methods',
        'PACKING_SLIP_TEMPLATE' => 'Shipping and delivery/Packing slip template',
        'NOTIFICATION' => 'Notifications',
        'EMAIL_TEMPLATE' => 'Notifications/Email notifications',
        'METAFIELD' => 'Metafields',
        'SHOP_POLICY' => 'Policies',
        'THIRD_PARTY_APP' => 'Integrations'
    ];

    private static function transformData(array $dataTypes, array $data)
    {
        foreach ($dataTypes as $key => $type) {
            if (is_string($type)) {
                settype($data[$key], $type);
            }

            if (is_array($type)) {
                foreach ($type as $keyArray => $item) {
                    if (!empty($data[$key][$keyArray])) {
                        settype($data[$key][$keyArray], $item);
                    }
                }
            }
        }

        $data = array_merge($data, [
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        return $data;
    }

    public static function updateLog($storeId, $data)
    {
        try {
            $url = config('translation_log.url') . 'api/activities';
            $data['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');
            $token = self::generateToken((string) $storeId);
            if (empty($data['id'])) {
                $data['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
            }
            $dataLog = self::transformData(self::DTO, $data);
            $response = Http::withToken($token)->post($url, $dataLog);
            return data_get(json_decode($response->body(), true), 'data', false);
        } catch (Exception $exception) {
            app('sentry')->captureException($exception);
        }
    }

    public static function getLog($storeId, $page = 1, $limit = 10)
    {
        $sentry = app('sentry');
        try {
            $token = self::generateToken($storeId);
            $url = config('translation_log.url') . 'api/activities';
            $response = Http::withToken($token)->get($url, ['page' => $page, 'limit' => $limit]);
            $result = json_decode($response->body(), true)['data'];
            return $result;
        } catch (Exception $exception) {
            $sentry->captureException($exception);
            return false;
        }
    }


    private static function generateToken(string $storeId)
    {
        $jwtKey = config('translation_log.secret_key');
        $payload = array(
            'store_id' => $storeId,
            'exp' => strtotime('+1 days')
        );

        return JWT::encode($payload, $jwtKey);
    }

    public static function createLog(string $storeId, array $params)
    {
        try {
            $data = [
                'store_id' => (string) $storeId,
                'status' => $params['status'],
                'value' => $params['value'],
                'action' => $params['action'],
                'type' => $params['type'] ?? 'single',
                'translation_log_id' => $params['translation_log_id'] ?? ''
            ];

            if (!empty($params['id'])) {
                $data['id'] = $params['id'];
            }

            $response = ActivityLog::updateLog($storeId, $data);

            return $response;
        } catch (Exception $exception) {
            app('sentry')->captureException($exception);
        }
    }

    public static function updateWithTranslationLog($storeId, $data)
    {
        try {
            $url = config('translation_log.url') . 'api/activities/update';
            $data['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');
            $token = self::generateToken((string) $storeId);
            $response = Http::withToken($token)->post($url, $data);
            return data_get(json_decode($response->body(), true), 'data', false);
        } catch (Exception $exception) {
            app('sentry')->captureException($exception);
        }
    }

    public static function logTranslateElements($storeId, $locale, $resource, $nameResource, $data, $action, $translator = 'Google')
    {
        $translator = ucfirst($translator);
        $title = OtherResource::loadCollection($storeId)
            ->where("type", $resource)
            ->where('id', $data['ids'][0])
            ->first()['title'] ?? 'Default title';

        ActivityLog::createLog($storeId, [
            'status' => ActivityLog::STATUS['SUCCESS'],
            'value' => [count($data['elements']), "$nameResource/$title", convertLocale($locale), $translator],
            'action' => $action,
            'type' => 'multi'
        ]);
    }

    public static function getPathItemOtherResource($storeId, $itemId)
    {
        $item = OtherResource::loadCollection($storeId)
            ->where('id', $itemId)
            ->first();

        $resourceName = self::RESOURCE_NAME[$item['type']] ?? $item['type'];
        return $resourceName . '/' . $item['title'];
    }

    public static function getPathItemTheme($itemId, $data)
    {
        $key = $data[0];
        $explode = explode('.', $key);
        $subResource = ($explode[0] == 'section') ? 'Custom content' : 'Theme content';
        return 'Themes/' . $subResource . '/' . (self::RESOURCE_NAME[$itemId] ?? convertCamelCase($itemId));
    }

    public static function getPathItemMetafield($storeId, $itemId)
    {
        $item = Metafield::loadCollection($storeId)
            ->where('id', $itemId)
            ->first();

        $name = 'Metafieds' . '/' . convertCamelCase($item['owner_resource']) . '/' . $item['elements']['value']['default'];

        return $name;
    }

    public static function getPathItemProduct($storeId, $itemId)
    {
        $item = Product::loadCollection($storeId)
            ->where('id', $itemId)
            ->first();

        $name = 'Products' . '/' . $item['title'];
        return $name;
    }

    public static function getActionCancel($action)
    {
        if ($action == 'translate') {
            return 'cancel_translation';
        } elseif ($action == 'delete') {
            return 'cancel_delete';
        } elseif ($action == 'replace') {
            return 'cancel_replace';
        }
    }

    public static function getActionRetry($action)
    {
        if ($action == 'translate') {
            return 'retry_translation';
        } elseif ($action == 'delete') {
            return 'retry_delete';
        } elseif ($action == 'replace') {
            return 'retry_replace';
        }
    }
}
