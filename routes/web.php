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

/* Route::group(['middleware' => ['App\Http\Middleware\AdminMiddleware']], 
    function () {
        Route::match(['get', 'post'], '/division/create', 'DivisionController@create');
}); */

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/division', 'DivisionController@index')->name('division.index');
Route::post('/division', 'DivisionController@store')->name('division.store');
Route::get('/division/create', 'DivisionController@create')
            ->name('division.create')
            ->middleware('admin');
Route::get('/division/{division}', 'DivisionController@show')->name('division.show');

#Route::resource('/academicos', 'AcademicosController', ['only' => 'show']);
Route::get('/academicos', 'AcademicosController@index')->name('academicos.index');
Route::post('/academicos', 'AcademicosController@store')->name('academicos.store');
Route::get('/academicos/create', 'AcademicosController@create')
            ->name('academicos.create')
            ->middleware('admin');
Route::get('/academicos/registrar', 'AcademicosController@registrar')
            ->name('academicos.registrar')
            ->middleware('admin');;
Route::get('/academicos/buscar/{busqueda}', 'AcademicosController@buscar')->name('academicos.buscar');
Route::get('/academicos/{academico}', 'AcademicosController@show')->name('academicos.show');
Route::get('/academicos/{academico}/edit', 'AcademicosController@edit')->name('academicos.edit');
Route::patch('/academicos/{academico}', 'AcademicosController@update')->name('academicos.update');
