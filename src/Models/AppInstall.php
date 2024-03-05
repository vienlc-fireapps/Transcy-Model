<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AppInstall extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'app_installed';

    protected $primaryKey = 'id';

    protected $fillable = [
        'store_id',
        'app_id',
        'is_installed'
    ];

    public function appIntegrate()
    {
        return $this->hasOne(AppIntegrate::class, 'id', 'app_id');
    }

    public function integrationDefaults()
    {
        return $this->hasMany(IntegraDefaultModel::class, 'store_id', 'store_id');
    }

    public function integrateArPages()
    {
        return $this->hasMany(IntegratePageAr::class, 'store_id', 'store_id');
    }
}
