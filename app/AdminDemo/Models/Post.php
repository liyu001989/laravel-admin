<?php

namespace AdminDemo\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends BaseModel
{
    use SoftDeletes;
    // 可填充的字段
    protected $fillable = ['title', 'content'];

    protected $casts = ['extra' => 'array'];

    public function user()
    {
        return $this->belongsTo('AdminDemo\Models\User');
    }

    public function comments()
    {
        return $this->hasMany('AdminDemo\Models\PostComment');
    }
}
