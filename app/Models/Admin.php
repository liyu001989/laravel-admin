<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Admin extends BaseModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    // 软删除和用户验证attempt
    //use Authenticatable;
    use Authenticatable,
        CanResetPassword,
        Notifiable,
        EntrustUserTrait,
        Authorizable {
            Authorizable::can as may;
            EntrustUserTrait::can insteadof Authorizable;
        }

    // 查询用户的时候，不暴露密码
    protected $hidden = ['password'];

    // 可填充的字段
    protected $fillable = ['name', 'avatar', 'email', 'password'];

    public function getAvatarAttribute()
    {
        return $this->attributes['avatar'] ? url($this->attributes['avatar']) : asset('images/user-avatar.jpg');
    }
}
