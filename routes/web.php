<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Index page
Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

//Forma
Route::get('pozivnica', ['as' => 'pozivnica.index.form', 'uses' => 'IndexController@pozivnica']);

Route::post('pozivnica/submit', ['as' => 'pozivnica.submit.attempt', 'uses' => 'IndexController@formSubmit']);

/*############# ADMIN ##############*/
// Dashboard
Route::get('admin', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);