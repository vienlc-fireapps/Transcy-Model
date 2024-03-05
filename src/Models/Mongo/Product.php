<?php

namespace Transcy\Models\Mongo;

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Schema\Blueprint;

class Product extends Model
{
    const MIGRATION = 'transcy:products:migrations:';
    const AUTO_TRANSLATE = 'transcy:products:auto_translate:';
    /**
     * @var string
     */
    protected $connection = 'mongodb';
    protected $collection = 'products' ;
    protected $hidden = [
        '_id'
    ];
//    protected $primaryKey = '_id';

    public function __construct($collection = "products")
    {
        $this->collection = $collection;
    }
    /**
     * @var string
     */
    protected static $collectionPrefix = 'products';


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

    public function setCollection($storeId)
    {
        $this->collection = self::$collectionPrefix . '_' . $storeId;

        return $this;
    }

    public static function dropCollection($storeId): void
    {
        $collection = self::$collectionPrefix . '_' . $storeId;
        Schema::connection('mongodb')->dropIfExists($collection);
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
                        '$setOnInsert' => [ 'created_at' => date("Y-m-d H:i:s")]
                    ],
                    ['upsert' => true]
                ]


            ];
        }
        if (!empty($dataBulkWrite)) {
            self::loadCollection($storeId)->raw(static function ($collection) use ($dataBulkWrite) {
                return $collection->bulkWrite(
                    $dataBulkWrite,
                    [ 'ordered' => false]
                );
            });
        }
    }

    public static function searchableFields($seachContent = false)
    {
        $fields = [
            'title',
            'handle',
            'product_type',
            'body_html',
            'meta_title',
            'meta_description'
        ];

        if (!$seachContent) {
            $fields = array_merge($fields, ['options', 'variants']);
        }

        return $fields;
    }

    public static function setIsRead($storeId, $itemId, $locale)
    {
        Product::loadCollection($storeId)->where('id', (int) $itemId)
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

    public static function getElements($option = false, $variant = false)
    {
        $elements = config('fa_setting.format_list.PRODUCT');

        if ($option) {
            $elements['options'] = 'Options';
        }

        if ($variant) {
            $elements['variants'] = 'Variants';
        }

        return $elements;
    }
}
