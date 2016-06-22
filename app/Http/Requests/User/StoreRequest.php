<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;

class StoreRequest extends Request
{
    public function rules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required|string|max:50',
            'password' => 'required|alpha_num',
        ];
    }
}
