<?php


//Auth::routes();

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');


//site routes
Route::get('login', 'SiteController@login')->name('login-page');
Route::get('/', 'SiteController@index')->name('index');
Route::get('/post/{id}', 'SiteController@post')->name('post');
Route::get('/posts', 'SiteController@posts')->name('posts');
Route::get('/products', 'SiteController@products')->name('products');
Route::get('/calc-page', 'SiteController@calcPage')->name('calc-page');
Route::post('/search', 'SiteController@search')->name('search');


//admin routes
Route::get('/admin-dashboard', 'AdminController@dashboard')->name('admin-dashboard');
Route::get('/admin-posts', 'AdminController@posts')->name('admin-posts');
Route::get('/admin-sliders', 'AdminController@sliders')->name('admin-sliders');
Route::get('/admin-products', 'AdminController@products')->name('admin-products');
Route::post('/admin-change-password', 'AdminController@changePassword')->name('admin-change-password');
Route::post('/admin-change-site-info', 'AdminController@changeInfo')->name('admin-change-site-info');
Route::post('/admin-product-add', 'AdminController@productAdd')->name('admin-product-add');
Route::get('/admin-product-edit/{id}', 'AdminController@productEdit')->name('admin-product-edit');
Route::get('/admin-product-remove/{id}', 'AdminController@productRemove')->name('admin-product-remove');


