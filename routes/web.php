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

Route::get('/division', 'DivisionController@index')->name('division.index');
Route::post('/division', 'DivisionController@store')->name('division.store');
Route::get('/division/create', 'DivisionController@create')->name('division.create');
Route::get('/division/{division}', 'DivisionController@show')->name('division.show');
