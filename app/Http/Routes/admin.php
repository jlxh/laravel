<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['pjax']], function () {

    Route::get('/', 'AdminController@index');
    Route::get('/template/{version}', 'AdminController@selectTemplate');
    Route::get('/example/{id}', 'AdminController@index');
    Route::get('/example/{id}', 'AdminController@index');
});
