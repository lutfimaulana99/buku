<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'BukuController@index');
Route::get('/create', 'BukuController@create');
Route::post('/buku','BukuController@store');
Route::get('/buku', 'BukuController@show');
Route::get('/buku/hapus/{id}', 'BukuController@hapus');
Route::get('/buku/edit/{id}', 'BukuController@edit');
Route::post('/buku/update', 'BukuController@update');

