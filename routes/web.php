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

Route::get('/', 'UrlController@index');

Route::get('/url/{url}/edit', 'UrlController@edit');
Route::patch('/url/{url}', 'UrlController@update');

Route::get('/url/import', 'UrlController@import');
Route::post('/url/import_parse', 'UrlController@parseImport');
Route::post('/url/import_process', 'UrlController@processImport');
