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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('submit','products@save');

Route::get('/home','products@index');

Route::get('delete/{id}', 'products@destroy');

Route::get('edit/{id}','products@edit');

Route::post('edit/update/{id}','products@update');