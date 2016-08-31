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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [
            'as' => 'dashboard',
            'uses' => 'DashboardController@dashboard',
        ]);

        Route::resource('users', 'UserController');

        Route::resource('posts', 'PostController');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index');
