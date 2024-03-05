<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class TestStore extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    protected $table = 'test_stores';
    /**
     * @var array
     */
    protected $fillable = [
        'shopify_domain',
        'owner',
    ];
}
