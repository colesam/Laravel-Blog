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

Route::group(['middleware' => ['web']], function() {
    Route::get('blog/{slug}',   ['as' => 'blog.single',     'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('blog',          ['as' => 'blog.index',      'uses' => 'BlogController@getIndex']);
    Route::get('contact',       ['as' => 'pages.contact',   'uses' => 'PagesController@getContact']);
    Route::get('about',         ['as' => 'pages.about',     'uses' => 'PagesController@getAbout']);
    Route::get('/',             ['as' => 'pages.index',     'uses' => 'PagesController@getIndex']);
    
    Route::resource('posts', 'PostController');
});
