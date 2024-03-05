<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
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
    protected $table = 'promotions';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'position',
        'app_name',
        'type_promotions',
        'name_promotions',
        'date_start',
        'date_end',
        'image_link',
        'image_name',
        'content',
        'link_redirect',
        'status',
        'created_at',
        'updated_at',
        'locale',
        'parent_id',
    ];

    public function getLocale($locale = null)
    {
        return $this->hasMany('\Transcy\Models\Promotion', 'parent_id', 'id')
        ->when(!empty($locale), function ($query) use ($locale) {
            $query->where('locale', $locale);
        })->first();
    }
}
