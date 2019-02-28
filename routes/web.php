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
Route::prefix('video')->group(function () {
	Route::get('config', 'YoutubeApiController@index')->name('video.config');
	Route::post('config/save', 'YoutubeApiController@update')->name('video.config.save');
});
