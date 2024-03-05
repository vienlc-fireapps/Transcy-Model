<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImageModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'product_images';

    protected $fillable = [
        'id',
        'store_id',
        'product_id',
        'src',
        'created_at',
        'updated_at',
    ];
}
