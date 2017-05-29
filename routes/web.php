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
Route::get('/standar7', "Standar7Controller@index");
Route::post('/standar7/save', 'Standar7Controller@save');
