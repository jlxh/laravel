<?php

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    // login and register
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('/login', 'AuthController@getLogin');
        Route::post('/login', 'AuthController@postLogin');
        Route::get('/register', 'AuthController@getRegister');
        Route::post('/register', 'AuthController@postRegister');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', 'Auth\AuthController@getLogout');
        Route::get('/', 'DashboardController@index');
        Route::get('/template/{version}', 'DashboardController@selectTemplate');
        Route::get('/example/{id}', 'DashboardController@index');

        // Admins management
        Route::resource('admins', 'AdminController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('roles', 'RoleController');
    });
});
