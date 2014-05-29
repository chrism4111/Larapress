<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Patterns
Route::pattern('title_name', '[A-Za-z0-9-]*');


//Authentication
Route::get('/login', function(){
    return 'login page';
});

Route::get('/logout', function(){
    return 'logout page';
});

Route::get('/reset_password', function(){
    return 'reset password page';
});


//Back-end routes

Route::get('/admin', function(){
    return 'admin dashboard';
});

Route::get('/admin/manage', function(){
    return 'manage posts, categories...';
});


//Front-end routes
Route::get( '/',  [ 'uses' => 'Larapress\Controllers\HomeController@index' ] );

Route::get('/category/{title_name}', [ 'uses' => 'Larapress\Controllers\CategoryController@index' ] );

Route::get('/tag/{title_name}', [ 'uses' => 'Larapress\Controllers\TagController@index' ] );

Route::get('/author/{title_name}', [ 'uses' => 'Larapress\Controllers\AuthorController@index' ] );

Route::get('/search/{title_name}', function(){
    return 'search page';
});

Route::get('/{title_name}',[ 'uses' => 'Larapress\Controllers\PostController@index' ] );
