<?php

//echo 'nikob bllic' . \App::getLocale();

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('/profile', 'HomeController@profile');
Route::post('/email', 'HomeController@email');
Route::get('/video/{id}', 'HomeController@video');

// Route::get('/payment', 'HomeController@payment');
Route::post('/paymentForWebinars', 'HomeController@paymentForWebinars');
Route::post('/paymentForLectures', 'HomeController@paymentForLectures');

Route::post('/webinar', 'HomeController@webinarEmail');
