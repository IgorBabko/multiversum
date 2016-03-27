<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);
    Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);

    Route::get('/email', ['as' => 'email', 'uses' => 'PagesController@email']);
    Route::post('/email', ['as' => 'sendEmail', 'uses' => 'PagesController@sendEmail']);

    Route::get('/webinars', ['as' => 'webinars', 'uses' => 'WebinarsController@index']);
    Route::get('/webinars/{slug}', ['as' => 'webinar', 'uses' => 'WebinarsController@showWebinar']);
    Route::get('/webinars/{searchString}/search', ['as' => 'searchWebinars', 'uses' => 'WebinarsController@search']);

    Route::get('/books', ['as' => 'books', 'uses' => 'BooksController@index']);
    Route::get('/books/{slug}', ['as' => 'book', 'uses' => 'BooksController@showBook']);
    Route::get('/books/{searchString}/search', ['as' => 'searchBooks', 'uses' => 'BooksController@search']);

    Route::get('/disks', ['as' => 'disks', 'uses' => 'DisksController@index']);
    Route::get('/disks/{slug}', ['as' => 'disk', 'uses' => 'DisksController@showDisk']);
    Route::get('/disks/{searchString}/search', ['as' => 'searchDisks', 'uses' => 'DisksController@search']);

    Route::get('/posts', ['as' => 'posts', 'uses' => 'PostsController@index']);
    Route::get('/posts/{slug}', ['as' => 'post', 'uses' => 'PostsController@showPost']);
    Route::get('/posts/{searchString}/search', ['as' => 'searchPosts', 'uses' => 'PostsController@search']);

    // auth
    Route::auth();
});
