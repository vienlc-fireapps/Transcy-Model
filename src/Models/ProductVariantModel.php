<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'product_variants';

    protected $fillable = [
        'id',
        'store_id',
        'product_id',
        'admin_graphql_api_id',
    ];
}
