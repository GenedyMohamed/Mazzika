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
    return view('homepage');
});

<<<<<<< HEAD
Route::get('/music', function () {
    return view('music');
});

Auth::routes();

Route::get('/', function () {
    return view('homepage');
});
=======
Route::get('/m/{name}', "MusicController@fetch_info");

Route::post('/m/{name}', "MusicController@add_review");

Auth::routes();

Route::get('/home', 'HomeController@index');

>>>>>>> 9dcd2a3ba0b7982e691551a6b4d85d50d3eab125

