<?php

namespace AdminDemo\Models;

class PostComment extends BaseModel
{
    public function user()
    {
        return $this->belongsTo('AdminDemo\Models\User');
    }

    public function post()
    {
        return $this->belongsTo('AdminDemo\Models\Post');
    }
}
