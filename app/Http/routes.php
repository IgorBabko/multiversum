<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);
    Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
    Route::get('/profile', ['as' => 'profile', 'uses' => 'PagesController@profile']);
    Route::get('/{searchString}/search', ['as' => 'search', 'uses' => 'PagesController@search']);

    Route::get('/email', ['as' => 'email', 'uses' => 'PagesController@email']);
    Route::post('/email', ['as' => 'sendEmail', 'uses' => 'PagesController@sendEmail']);

    Route::get('/videos', ['as' => 'videos', 'uses' => 'VideosController@index']);
    Route::get('/videos/{slug}', ['as' => 'video', 'uses' => 'VideosController@showVideo']);
    Route::get('/videos/{searchString}/search', ['as' => 'searchVideos', 'uses' => 'VideosController@search']);

    Route::get('/books', ['as' => 'books', 'uses' => 'BooksController@index']);
    Route::get('/books/{slug}', ['as' => 'book', 'uses' => 'BooksController@showBook']);
    Route::get('/books/{searchString}/search', ['as' => 'searchBooks', 'uses' => 'BooksController@search']);

    Route::get('/disks', ['as' => 'disks', 'uses' => 'DisksController@index']);
    Route::get('/disks/{slug}', ['as' => 'disk', 'uses' => 'DisksController@showDisk']);
    Route::get('/disks/{searchString}/search', ['as' => 'searchDisks', 'uses' => 'DisksController@search']);

    Route::get('/posts', ['as' => 'posts', 'uses' => 'PostsController@index']);
    Route::get('/posts/{slug}', ['as' => 'post', 'uses' => 'PostsController@showPost']);
    Route::get('/posts/{searchString}/search', ['as' => 'searchPosts', 'uses' => 'PostsController@search']);
    Route::get('/posts/category/{name}', ['as' => 'catagoryPosts', 'uses' => 'PostsController@showPostsFromCategory']);
    Route::get('/posts/tag/{name}', ['as' => 'tagPosts', 'uses' => 'PostsController@showPostsWithTag']);

    // auth
    Route::auth();
});
