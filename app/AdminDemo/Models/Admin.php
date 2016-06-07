<?php

namespace AdminDemo\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Admin extends BaseModel implements AuthenticatableContract
{
    // 软删除和用户验证attempt
    use Authenticatable;

    // 查询用户的时候，不暴露密码
    protected $hidden = ['password'];

    // 可填充的字段
    protected $fillable = ['name', 'avatar'];

    public function getAvatarAttribute()
    {
        return $this->attributes['avatar'] ? url($this->attributes['avatar']) : asset('images/user-avatar.jpg');
    }
}
