<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $validator = \Validator::make($request->input(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (!$token = \Auth::attempt($credentials)) {
            $validator->after(function ($validator) {
                $validator->errors()->add('error', '邮箱或密码错误!');
            });
        }

        if ($validator->fails()) {
            return redirect(route('admin.auth.login.get'))
                ->withInput($request->only('email'))
                ->withErrors($validator->messages());
        }

        $redirect = session('url.intended') ?: route('admin.dashboard');

        return redirect($redirect);
    }

    public function logout()
    {
        \Auth::logout();

        return redirect(route('admin.auth.login.get'));
    }
}
