<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmentStore extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    protected $table = 'development_stores';

    public $primaryKey = 'shopify_domain';

    protected $fillable = [
        'shopify_domain',
        'owner',
        'status'
    ];
}
