<?php



Route::get('/', 'SiteController@index')->name('index');
Route::get('/post/{id}', 'SiteController@post')->name('post');
Route::get('/posts', 'SiteController@posts')->name('posts');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
