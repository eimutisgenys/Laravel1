<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register','RegisterController@index');

Route::get('/foo/bar','UriController@index');

Route::get('/displayusers','RegisterController@displayusers');

Route::get('/deleteuser/{username}','RegisterController@deleteuser');