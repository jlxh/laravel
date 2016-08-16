<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('admin', 'AdminController@index');

Route::get('admin/template/{version}', 'AdminController@selectTemplate');
