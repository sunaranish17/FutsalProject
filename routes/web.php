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

//Front

Route::get('/', function () {
    return view('front.home');
});
Route::get('/home', function () {
    return view('front.home');
})->name('home');

Route::get('pages/aboutfutshall', function () {
    return view('front.pages.aboutfutshall');
});



Auth::routes();

Route::get('/auths', 'HomeController@index')->name('auths');
Route::get('/logout','HomeController@logout');


//ARENARa
Route::get('/arena','ArenaController@index');
Route::get('/setting','ArenaController@create');
Route::post('/setting/update/{id}','ArenaController@update');

//multimedia
Route::get('/multimedia','MultimediaController@index');
Route::get('/multimedia/add','MultimediaController@create');
Route::post('/multimedia/create','MultimediaController@store');
Route::get('/multimedia/view/{id}','MultimediaController@show');
Route::get('/multimedia/edit/{id}','MultimediaController@edit');
Route::post('/multimedia/update/{id}','MultimediaController@update');
Route::get('/multimedia/delete/{id}','MultimediaController@destroy');