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

Route::get('/','todoController@index');
Route::get('/add','todoController@add');
Route::post('/insert','todoController@insert');
Route::get('/edit/{id}','todoController@edit');
Route::post('/update','todoController@update');
Route::post('/delete','todoController@delete');

// Route::get('/test','TestCon@index');