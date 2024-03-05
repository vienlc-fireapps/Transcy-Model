<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class IntegratePageAr extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'integrate_page_ar';

    protected $fillable = [
        'id',
        'store_id',
        'key',
        'value',
    ];

    protected $casts = [
        'message' => 'array'
    ];

    public function integrateWidgetAr()
    {
        return $this->hasMany(IntegrateWidgetAr::class, 'integrate_page_ar_id', 'id');
    }
}
