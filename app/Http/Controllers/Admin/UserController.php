<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Requests\User\StoreRequest;

class UserController extends BaseController
{
    public function index()
    {
        $users = User::paginate();

        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(StoreRequest $request)
    {
    }
}
