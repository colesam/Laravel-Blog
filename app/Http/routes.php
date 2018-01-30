<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//  Authentication Routes
Route::get('auth/login',                ['as' => 'auth.form',           'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login',               ['as' => 'auth.login',          'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',               ['as' => 'auth.logout',         'uses' => 'Auth\AuthController@getLogout']);

//  Registration Routes
Route::get('auth/register',             ['as' => 'register.form',       'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register',            ['as' => 'register.request',    'uses' => 'Auth\AuthController@postRegister']);

//  Password Reset Routes
Route::get('password/reset/{token?}',   ['as' => 'password',            'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email',           ['as' => 'password.email',      'uses' => 'Auth\PasswordController@sendResetLinkEmail']);
Route::post('password/reset',           ['as' => 'password.reset',      'uses' => 'Auth\PasswordController@reset']);

//  Other Routes
Route::get('blog/{slug}',               ['as' => 'blog.single',         'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog',                      ['as' => 'blog.index',          'uses' => 'BlogController@getIndex']);
Route::get('contact',                   ['as' => 'pages.contact',       'uses' => 'PagesController@getContact']);
Route::get('about',                     ['as' => 'pages.about',         'uses' => 'PagesController@getAbout']);
Route::get('/',                         ['as' => 'pages.index',         'uses' => 'PagesController@getIndex']);

//  Resources
Route::resource('posts',        'PostController');
Route::resource('categories',   'CategoryController', ['except' => ['create', 'show', 'edit', 'update']]);