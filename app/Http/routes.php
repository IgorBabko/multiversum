<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);

    Route::get('/webinars', ['as' => 'webinars', 'uses' => 'WebinarsController@index']);
    Route::get('/webinars/{slug}', ['as' => 'webinar', 'uses' => 'WebinarsController@showWebinar']);

    Route::get('/books', ['as' => 'books', 'uses' => 'BooksController@index']);
    Route::get('/books/{slug}', ['as' => 'book', 'uses' => 'BooksController@showBook']);

    Route::get('/disks', ['as' => 'disks', 'uses' => 'DisksController@index']);
    Route::get('/disks/{slug}', ['as' => 'disk', 'uses' => 'DisksController@showDisk']);

    Route::get('/posts', ['as' => 'posts', 'uses' => 'PostsController@index']);
    Route::get('/posts/{slug}', ['as' => 'post', 'uses' => 'PostsController@showPost']);

    // dashboard

    Route::group(['prefix' => 'dashboard'], function () {

        Route::get('/', ['as' => 'dashboard', 'uses' => 'Dashboard\DashboardController@index']);

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

    // auth
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
