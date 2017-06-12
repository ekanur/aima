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

Route::get('/', "PageController@index");
Route::get('/standar2', "Standar2Controller@index");
Route::post('/standar2/save', "Standar2Controller@save");
Route::post('/standar2/update', "Standar2Controller@update");
Route::get('/standar3', 'Standar3Controller@index');
Route::post('/standar3/save', 'Standar3Controller@save');
Route::get('/standar4', 'Standar4Controller@index');
Route::post('/standar4/save', 'Standar4Controller@save');
Route::get('/standar5', 'Standar5Controller@index');
Route::post('/standar5/save', 'Standar5Controller@save');
Route::get('/standar7', "Standar7Controller@index");
Route::post('/standar7/save', 'Standar7Controller@save');
Route::get('/standar6', "Standar6Controller@index");
Route::post('/standar6/save', "Standar6Controller@save");
