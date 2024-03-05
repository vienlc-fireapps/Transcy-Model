<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class AdminNews extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'admin_news';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'link_redirect',
        'title',
        'content',
        'functions',
        'image_link',
        'image_name',
        'is_delete',
        'position',
        'reference_date',
        'reference_id',
        'status',
        'type',
        'locale',
        'parent_id',
    ];

    public function translate()
    {
        $locale = request()->get('locale', 'en');
        return $this->hasOne(AdminNews::class, 'parent_id', 'id')
            ->where('locale', $locale);
    }
}
