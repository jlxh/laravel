<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // login and register
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('/login', 'AuthController@getLogin');
        Route::post('/login', 'AuthController@postLogin');
        Route::get('/register', 'AuthController@getRegister');
        Route::post('/register', 'AuthController@postRegister');
    });

    Route::group(['middleware' => ['auth', 'pjax']], function () {
        Route::get('/logout', 'Auth\AuthController@getLogout');
        Route::get('/', 'AdminController@index');
        Route::get('/template/{version}', 'AdminController@selectTemplate');
        Route::get('/example/{id}', 'AdminController@index');
        Route::get('/example/{id}', 'AdminController@index');
    });
});
