<?php

namespace Transcy\Models\Mongo;

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Integration extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mongodb';
    protected $collection = 'integrations';
    protected $primaryKey = 'key';
    protected $hidden = [
        '_id'
    ];
    public function __construct($collection = "integrations")
    {
        $this->collection = $collection;
    }
    /**
     * @var string
     */
    protected static $collectionPrefix = 'integrations';

    protected $fillable = [];

    public static function setIndex(int $storeId, string $indexName, ?int $order = -1)
    {
        $collectionName = self::$collectionPrefix . '_' . $storeId;

        Schema::connection('mongodb')->table($collectionName, static function (Blueprint $table) use (
            $indexName,
            $order
        ) {
            $table->index([$indexName => $order]);
        });
    }

    public static function defaultData($data = []): Collection
    {
        return (new Collection([
            'key' => null,
            'app_name' => null,
            'store_id' => null,
            'default' => null,
            'language_translation' => []
        ]))->merge($data);
    }

    public static function insertArray($storeId, $data)
    {
        $dataBulkWrite = [];
        foreach ($data as $item) {
            $dataBulkWrite[] = [
                'updateOne' => [
                    [
                        'key' => $item['key'],
                        'store_id' => $storeId,
                        'app_name' => $item['app_name']
                    ],
                    [
                        '$set' => $item,
                        '$setOnInsert' => ['created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]
                    ],
                    ['upsert' => true]
                ]
            ];
        }
        if (!empty($dataBulkWrite)) {
            self::raw(static function ($collection) use ($dataBulkWrite) {
                return $collection->bulkWrite(
                    $dataBulkWrite,
                    ['ordered' => false]
                );
            });
        }
    }

    public static function bulkWrite($dataUpdate)
    {
        $dataBulkWrite = [];
        foreach ($dataUpdate as $item) {
            $dataBulkWrite[] = [
                'updateMany' => [
                    $item['filter'],
                    $item['condition'],
                    $item['options']
                ]
            ];
        }

        if (!empty($dataBulkWrite)) {
            self::raw(static function ($collection) use ($dataBulkWrite) {
                return $collection->bulkWrite(
                    $dataBulkWrite,
                    ['ordered' => false]
                );
            });
        }
    }

    public function scopeCommon(Builder $query, string $appName, $storeId): void
    {
        $query->where('app_name', $appName)->where('store_id', $storeId);
    }
}
