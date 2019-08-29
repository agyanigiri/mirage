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
    return redirect('/announcements/sgx');
})->middleware('auth');

Route::get('/announcements/{market}', 'HomeController@index')->middleware('auth');

Route::get('/sgx/details/{market}', 'HomeController@sgxDetails')->middleware('auth');

Route::get('/ajax', 'HomeController@getData')->middleware('auth');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
