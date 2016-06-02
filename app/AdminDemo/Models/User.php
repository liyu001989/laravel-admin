<?php

namespace AdminDemo\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends BaseModel implements AuthenticatableContract
{
    // 软删除和用户验证attempt
    use SoftDeletes, Authenticatable;

    // 查询用户的时候，不暴露密码
    protected $hidden = ['password'];

    // 可填充的字段
    protected $fillable = ['name', 'avatar'];

    public function posts()
    {
        return $this->hasMany('AdminDemo\Models\Post');
    }

    public function postComments()
    {
        return $this->hasMany('AdminDemo\Models\PostComment');
    }

    public function getAvatarAttribute()
    {
        return $this->attributes['avatar'] ? url($this->attributes['avatar']) : asset('images/user-avatar.jpg');
    }
}
