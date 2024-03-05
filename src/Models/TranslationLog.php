<?php

namespace Transcy\Models;

use App\Events\EventTranslating;
use App\Facade\TranslationLogFacade;
use Carbon\Carbon;
use Exception;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Http;

class TranslationLog
{
    const STATUS = [
        'WAITING' => 1,
        'PROCESSING' => 2,
        'SUCCESS' => 3,
        'FAILED' => 4,
        'CANCEL' => 5,
        'RETRY' => 6
    ];

    const STATUS_LOG_DETAIL = [
        'WAITING' => 1,
        'PROCESSING' => 2,
        'SUCCESS' => 3,
        'FAILED' => 4
    ];

    const SERVICE = [
        'GOOGLE' => 'google',
        'DEEPL' => 'deepl'
    ];

    const ACTION = [
        'TRANSLATE' => 'translate',
        'DELETE' => 'delete',
        'REPLACE' => 'replace'
    ];

    const DTO = [
        'main' => [
            'store_id' => 'string',
            'source' => 'string',
            'sub_resource' => 'string',
            'group' => 'string',
            'target' => 'array',
            'filter' => [
                'locales' => 'array',
                'ids' => 'array',
                'elements' => 'array',
                'search' => [
                    'keyword' => 'string',
                    'sort' => 'string',
                    'sort_by' => 'name',
                    'search_type' => 'string',
                    'status' => 'array'
                ]
            ],
            'quantity' => 'integer',
            'total_handled' => 'integer',
            'total_waiting' => 'integer',
            'total_processing' => 'integer',
            'total_failed' => 'integer',
            'status' => 'integer',
            'resource' => 'string',
            'action' => 'string',
            'service' => 'string',
        ],
        'details' => [
            'item_id' => 'string',
            'name' => 'string',
            'status' => 'integer',
            'character' => 'int',
        ]
    ];

    private static function transformDefaultData(array $dataTypes, array $data)
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

    private static function transformData(array $dataTypes, array $data)
    {
        foreach ($dataTypes as $key => $type) {
            if (empty($data[$key])) {
                continue;
            }

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

    private static function postLog(string $storeId, string $url, array $data)
    {
        $sentry = app('sentry');

        try {
            for ($i = 0; $i < 10; $i++) {
                $token = self::generateToken($storeId);
                $response = Http::withToken($token)->post($url, $data);
                $dataResponse = json_decode($response->body(), true);
                if ($dataResponse['status'] == true) {
                    break;
                }
            }

            return $dataResponse['data'] ?? [];
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

    /**
     * Initialize log with specified data.
     *
     * @param string $storeId The store ID.
     * @param array $data The data array containing the log information.
     *                  Expected fields:
     *                      'store_id' => 'string',
     *                      'source' => 'string',
     *                      'target' => 'string',
     *                      'filter' => [
     *                          'locales' => 'array',
     *                          'ids' => 'array',
     *                          'elements' => 'array',
     *                          'search' => [
     *                              'keyword' => 'string',
     *                              'sort' => 'string',
     *                              'sort_by' => 'name',
     *                              'search_type' => 'string',
     *                              'status' => 'array'
     *                          ]
     *                      ],
     *                      'quantity' => 'integer',
     *                      'total_handled' => 'integer',
     *                      'status' => 'integer',
     *                      'resource' => 'string',
     *                      'action' => 'string',
     *                      'service' => 'string',
     *
     * @return mixed
     */
    public static function initLog(string $storeId, array $data)
    {
        $dataTypes = self::DTO['main'];
        $data = self::transformDefaultData($dataTypes, $data);
        $url = config('translation_log.url') . 'api/log';
        $result = self::postLog($storeId, $url, $data);

        return $result;
    }

    /**
     * @param string $storeId The store ID.
     * @param array $data The data array containing multi log detail information.
     *                  Expected fields:
     *                      'item_id' => 'string',
     *                      'status' => 'string',
     *                      'character' => 'string',
     *
     * @return mixed
     */
    public static function updateOrCreateLogDetail(string $storeId, string $idLog, array $data)
    {
        $logDetail = [];
        foreach ($data as $item) {
            $logDetail[] = self::transformData(self::DTO['details'], $item);
        }

        $url = config('translation_log.url') . 'api/log/' . $idLog;
        return self::postLog($storeId, $url, $logDetail);
    }

    public static function updateMainStatus(string $storeId, string $idLog, $status = null)
    {
        $sentry = app('sentry');
        try {
            $url = config('translation_log.url') . 'api/log/update-status/' . $idLog;
            $token = self::generateToken($storeId);
            for ($i = 0; $i < 10; $i++) {
                if ($status) {
                    $dataResponse = Http::withToken($token)->post($url, ['status' => $status]);
                } else {
                    $dataResponse = Http::withToken($token)->post($url);
                }

                if ($dataResponse['status'] == true) {
                    break;
                }
            }


            event(new EventTranslating($storeId));

            return true;
        } catch (Exception $exception) {
            $sentry->captureException($exception);
            return false;
        }
    }

    public static function generateDataLogDetail(array $data, $status = 1, $resource = null)
    {
        $logDetail = [];
        foreach ($data as $item) {
            if ($status != 1) {
                $logDetail[] = [
                    'item_id' => $item['id'] ?? $item['key'],
                    'status' => $status,
                ];
            } else {
                if ($resource == 'METAFIELD') {
                    $name = $item['elements']['value']['default'];
                } else {
                    $name =  $item['title'] ?? 'Default title';
                }

                $logDetail[] = [
                    'item_id' => $item['id'] ?? $item['key'],
                    'name' => $name,
                    'status' => $status,
                    'character' => $item['character'] ?? 0,
                    'message' => $item['message'] ?? []
                ];
            }
        }

        return $logDetail;
    }

    public static function saveLog($storeId, $idLog, $logSuccess, $logErrors)
    {
        if ($logSuccess) {
            self::updateOrCreateLogDetail($storeId, $idLog, $logSuccess);
        }

        if ($logErrors) {
            self::updateOrCreateLogDetail($storeId, $idLog, $logErrors);
        }
    }

    public static function createMainLogForOtherResource($resource, $target, $filters, $additionalData = [])
    {
        $store = request()->store;
        $translator = request()->get('translator') ?: 'google';
        $log = TranslationLog::initLog($store->id, array_merge([
            'store_id' => $store->id,
            'source' => $store->primary_locale,
            'target' => $target,
            'filter' => $filters,
            'quantity' => 0,
            'total_handled' => 0,
            'status' => TranslationLog::STATUS['WAITING'],
            'resource' => $resource,
            'action' => TranslationLog::ACTION['TRANSLATE'],
            'service' => !empty($translator) ? $translator : 'google'
        ], $additionalData));

        if (empty($log) || empty($log['_id'])) {
            return false;
        }

        TranslationLogFacade::setIdLog($log['_id']);
    }

    public static function createDetailLogForOtherResource($storeId, $query)
    {
        $limit = 200;
        $currentPage = 0;
        $idLog = TranslationLogFacade::getIdLog();
        while (true) {
            $lines = $query->skip($limit * $currentPage)->take($limit)->get();
            if ($lines->count() == 0) {
                break;
            }
            $currentPage++;
            $logDetail = TranslationLog::generateDataLogDetail($lines->toArray());
            TranslationLog::updateOrCreateLogDetail($storeId, $idLog, $logDetail);
        }
    }

    public static function getResourceProcessing($storeId)
    {
        $sentry = app('sentry');
        try {
            $token = self::generateToken($storeId);
            $url = config('translation_log.url') . 'api/log/processing';
            $response = Http::withToken($token)->get($url);
            return json_decode($response->body(), true)['data'] ?? [];
        } catch (Exception $exception) {
            $sentry->captureException($exception);
            return false;
        }
    }

    public static function getLog($storeId, $logId)
    {
        $sentry = app('sentry');
        try {
            $token = self::generateToken($storeId);
            $url = config('translation_log.url') . 'api/log/' . $logId;
            $response = Http::withToken($token)->get($url);

            return json_decode($response->body(), true)['data'] ?? [];
        } catch (Exception $exception) {
            $sentry->captureException($exception);
            return false;
        }
    }

    public static function getLatestLogResource($storeId, string $resourceType = null)
    {
        $sentry = app('sentry');
        try {
            $query = [];
            if ($resourceType) {
                $query = ['resource_type' => $resourceType];
            }

            $token = self::generateToken($storeId);
            $url = config('translation_log.url') . 'api/log/product/latest';
            $response = Http::withToken($token)->get($url, $query);

            return data_get(json_decode($response->body(), true), 'data._source', false);
        } catch (Exception $exception) {
            $sentry->captureException($exception);
            return false;
        }
    }

    public static function searchLog($storeId, $dataSearch = [])
    {
        $sentry = app('sentry');
        try {
            $token = self::generateToken($storeId);
            $url = config('translation_log.url') . 'api/log';
            $response = Http::withToken($token)->get($url, $dataSearch);
            return data_get(json_decode($response->body(), true), 'data', false);
        } catch (Exception $exception) {
            $sentry->captureException($exception);
            return false;
        }
    }

    public static function createNotification($storeId, $data)
    {
        $url = config('translation_log.url') . 'api/notifications';
        $token = self::generateToken($storeId);
        $response = Http::withToken($token)->post($url, $data);

        return data_get(json_decode($response->body(), true), 'data.notification_id', false);
    }
}
