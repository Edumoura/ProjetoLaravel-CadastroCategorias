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
    return view('index');
})->name('home');
Route::get('/produtos', 'ControladorProduto@index')->name('produtos');
Route::get('/categorias', 'ControladorCategoria@index')->name('categorias');
Route::get('/categorias/novo', 'ControladorCategoria@create')->name('categoria/novo');
Route::post('/categorias', 'ControladorCategoria@store')->name('categorias');


