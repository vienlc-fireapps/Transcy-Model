<?php

namespace Transcy\Models\Mongo;

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Schema\Blueprint;

class OtherResource extends Model
{
    const COLLECTION_AUTO_TRANSLATE = 'transcy:collections:auto_translate:';
    const LIST_COLLECTION_AUTO = 'transcy:collection-auto';
    /**
     * @var string
     */
    protected $connection = 'mongodb';
    protected $collection = 'other_resources';
    protected $primaryKey = 'id';
    protected $hidden = [
        '_id'
    ];
    public function __construct($collection = "other_resources")
    {
        $this->collection = $collection;
    }
    /**
     * @var string
     */
    protected static $collectionPrefix = 'other_resources';

    protected $fillable = [];

    /**
     * @var array
     */
    public static function initCollection($storeId)
    {
        $collectionName = self::$collectionPrefix . '_' . $storeId;
        Schema::connection('mongodb')->table($collectionName, static function (Blueprint $table) {
            $table->index('id');
        });
    }

    public function setCollection($storeId)
    {
        $this->collection = self::$collectionPrefix . '_' . $storeId;
    }

    public static function loadCollection($storeId)
    {
        $collectionName = self::$collectionPrefix . '_' . $storeId;
        return new self($collectionName);
    }

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

    public static function insertArray($storeId, $data)
    {
        $dataBulkWrite = [];
        foreach ($data as $item) {
            $item['updated_at'] = date("Y-m-d H:i:s");
            $dataBulkWrite[] = [
                'updateOne' => [
                    ['id' => $item['id']],
                    [
                        '$set' => $item,
                        '$setOnInsert' => ['created_at' => date("Y-m-d H:i:s")]
                    ],
                    ['upsert' => true]
                ]


            ];
        }
        if (!empty($dataBulkWrite)) {
            self::loadCollection($storeId)->raw(static function ($collection) use ($dataBulkWrite) {
                return $collection->bulkWrite(
                    $dataBulkWrite,
                    ['ordered' => false]
                );
            });
        }
    }

    public static function searchableFields($type)
    {
        return config('fa_translatable_resource_type.' . $type);
    }

    public static function setIsRead($storeId, $itemId, $locale)
    {
        OtherResource::loadCollection($storeId)->where('id', (int) $itemId)
            ->raw(static function ($collection) use ($itemId, $locale) {
                return $collection->bulkWrite(
                    [
                        [
                            'updateOne' => [
                                ['id' => (int) $itemId],
                                [
                                    '$set' => [
                                        "is_reads.$locale" => true,
                                        'updated_at' => date('Y-m-d H:i:s')
                                    ],
                                ]
                            ]
                        ]
                    ]
                );
            });
    }

    public static function getElements($resource)
    {
        return config('fa_setting.format_list.' . $resource);
    }
}
