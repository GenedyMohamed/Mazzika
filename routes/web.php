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

Route::get('/music', 'AllMusicController@index');

Auth::routes();


Route::get('/m/{name}', "MusicController@fetch_info");


Route::post('/post', "MusicController@add_review");

Route::get('/like', "MusicController@like");


Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/artist', function () {
    return view('/artist/artist');
});

Route::get('/artist/update', function () {
    return view('/artist/update');
});

Route::post('/artist/update', 'MusicController@update');

Route::get('/artist/delete', function () {
    return view('/artist/delete');
});

Route::post('/artist/delete', 'MusicController@delete');
