<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOptionModel extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $table = 'product_options';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'store_id',
        'product_id',
        'admin_graphql_api_id',
        'name'
    ];
}
