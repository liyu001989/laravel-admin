<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends BaseModel
{
    // 软删除
    use SoftDeletes;

    // 查询用户的时候，不暴露密码
    protected $hidden = ['password'];

    // 可填充的字段
    protected $fillable = ['name', 'avatar', 'password'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function postComments()
    {
        return $this->hasMany('App\Models\PostComment');
    }

    public function getAvatarAttribute()
    {
        return $this->attributes['avatar'] ? url($this->attributes['avatar']) : \Identicon::getImageDataUri($this->attributes['email']);
    }
}
