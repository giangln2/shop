<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', 'ProductController@index');

Route::resource('product', 'ProductController');

Route::get('login', function () {
    return view('login');
});

Route::post('login', 'User\LoginController@login');

Route::post('register', 'User\RegisterController@register');

Route::get('logout', 'User\LoginController@logout');

Route::post('check', 'User\RegisterController@check');

Route::get('category', 'CategoryController@getListCategory');

Route::get('category/{id}', 'CategoryController@getListProductByCategory');
