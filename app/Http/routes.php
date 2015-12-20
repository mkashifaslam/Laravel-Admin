<?php

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
// welcome route
Route::get('/', function () {
    return view('welcome');
});

// Application routes...
Route::group(['middleware' => 'auth'], function () {
    Route::get('users', 'UserController@index');
    Route::get('user/show/{id}', 'UserController@show');
    Route::get('user/edit/{id}', 'UserController@edit');
    Route::post('user/update/{id}', 'UserController@update');
    Route::get('user/delete/{id}', 'UserController@destroy');
    Route::get('auth/logout','Auth\AuthController@getLogout');
    Route::get('web/scrapper','WebController@getStart');

});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


