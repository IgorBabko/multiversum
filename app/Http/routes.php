<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);
    Route::get('/email', ['as' => 'email', 'uses' => 'PagesController@email']);
    Route::post('/email', ['as' => 'sendEmail', 'uses' => 'PagesController@sendEmail']);

    Route::get('/webinars', ['as' => 'webinars', 'uses' => 'WebinarsController@index']);
    Route::get('/webinars/{slug}', ['as' => 'webinar', 'uses' => 'WebinarsController@showWebinar']);

    Route::get('/books', ['as' => 'books', 'uses' => 'BooksController@index']);
    Route::get('/books/{slug}', ['as' => 'book', 'uses' => 'BooksController@showBook']);

    Route::get('/disks', ['as' => 'disks', 'uses' => 'DisksController@index']);
    Route::get('/disks/{slug}', ['as' => 'disk', 'uses' => 'DisksController@showDisk']);

    Route::get('/posts', ['as' => 'posts', 'uses' => 'PostsController@index']);
    Route::get('/posts/{slug}', ['as' => 'post', 'uses' => 'PostsController@showPost']);

    // dashboard

    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'Dashboard\DashboardController@index']);

    Route::group(['prefix' => 'dashboard'], function () {
        Route::resource('webinars', 'Dashboard\WebinarsController', ['parameters' => [
            'webinars' => 'webinar',
        ]]);

        Route::resource('books', 'Dashboard\BooksController', ['parameters' => [
            'books' => 'book',
        ]]);

        Route::resource('disks', 'Dashboard\DisksController', ['parameters' => [
            'disks' => 'disk',
        ]]);

        Route::resource('posts', 'Dashboard\PostsController', ['parameters' => [
            'posts' => 'post',
        ]]);
    });
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
