<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect(route('admin.dashboard'));
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['middleware' => 'guest'], function () {
        // 登录页面
        Route::get('/auth/login', [
            'as' => 'admin.auth.login.get',
            'uses' => 'AuthController@getLogin',
        ]);
        // 登录提交
        Route::post('/auth/login', [
            'as' => 'admin.auth.login.post',
            'uses' => 'AuthController@postLogin',
        ]);
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [
            'as' => 'admin.dashboard',
            'uses' => 'DashboardController@dashboard',
        ]);

        // 登出
        Route::get('/auth/logout', [
            'as' => 'admin.auth.logout',
            'uses' => 'AuthController@logout',
        ]);

        Route::resource('users', 'UserController');

        Route::resource('posts', 'PostController');
    });
});
