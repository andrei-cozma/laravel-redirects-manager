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

Route::get('/', 'IndexController');

Route::view('/create', 'create');
Route::post('/', 'StoreController');
Route::get('/{url}/edit', 'EditController');
Route::patch('/{url}', 'UpdateController');

Route::view('/import', 'import');
Route::post('/import_parse', 'ParseImportController');
Route::post('/import_store', 'StoreImportController');

Route::get('/generate', 'GenerateController');