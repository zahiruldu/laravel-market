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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/logout', function () {
    return view('auth/logout');
});

Route::get('/user/{id}', function ($id) {
    return 'Your user ID: '. $id;
});

Route::get('/userDetail/{id}', function ($id) {
    return 'Your Detail in JSON: '. $id;
});

Route::get('/dashboard', function () {
    return 'Your after register page';
});

Route::get('/home', function () {
    return 'Your Home page';
});




// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');






/*
||||||||||| API Request of User Details
*/

Route::get('/getUser/{id}', function ($id) {
    return 'User Detail in JSON: '. $id;
});
