<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class BlogIntegrate extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';

    protected $table = 'blog_integrate';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'title',
        'description',
        'link_redirect',
        'status',
        'date_create',
        'locale',
        'parent_id',
        'position',
    ];

    public function getLocale($locale = null)
    {
        return $this->hasMany('\Transcy\Models\BlogIntegrate', 'parent_id', 'id')
        ->when(!empty($locale), function ($query) use ($locale) {
            $query->where('locale', $locale);
        })->first();
    }
}
