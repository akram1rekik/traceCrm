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
Route::get('/','HomeController@showWelcome');
Route::get('hello','HomeController@showWelcome');
Route::controller('contact', 'ContactController');
Route::resource('user','UserController');
Route::controller('command','CommandController');
Route::controller('auth','AuthController');
Route::controller('password', 'RemindersController');
Route::controller('register','RegisterController');

