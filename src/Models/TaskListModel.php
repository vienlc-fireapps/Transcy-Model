<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class TaskListModel extends Model
{
    protected $connection = 'mysql_master';

    protected $table = 'task_list';

    protected $casts = [
        'checked_task_list' => 'array'
    ];

    protected $fillable = [
        'store_id',
        'checked_task_list',
        'checked_all_status'
    ];
}
