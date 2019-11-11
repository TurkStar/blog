<?php

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/contactUs', 'ContactUsController@index');
Route::post('/contactUs', 'ContactUsController@store');

Route::get('/categories', 'CategoryController@list');

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
