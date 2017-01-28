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

Route::get('/artist', function () {
    return view('/artist/artist');
});

Route::get('/artist/update', function () {
    return view('/artist/update');
});

Route::post('/artist/update', function (){

});


Route::get('/artist/delete', function () {
    return view('/artist/delete');
});

Route::post('/artist/delete', function(){

});
