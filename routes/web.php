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
Route::get('documentos/create', 'DocumentoController@create');
Route::post('insert', 'DocumentoController@insert');
Route::get('documentos/index', 'DocumentoController@index');
Route::post('documentos', 'DocumentoController@store');
Route::delete('documentos/{documento}', 'DocumentoController@destroy');
Route::get('documentos/{documento}','DocumentoController@documentoSingle');

Route::post('/filtro','FiltroController@filtro');
Route::get('filtro', function () {
    return view('search.search' ); });