<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ShopMetaModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    /**
     * @var string
     */
    protected $table = 'shop_meta';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'meta_title',
        'meta_description',
        'created_at',
        'updated_at'
    ];
}
