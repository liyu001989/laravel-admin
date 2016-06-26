<?php

/**
 * @author    liyu
 * @desc      基础模型
 */
namespace AdminDemo\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $casts = ['created_at', 'updated_at'];

    protected $hidden = ['deleted_at', 'extra'];
}
