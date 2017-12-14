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

Route::get('/', 'BaseController@index');
Route::get('/create', 'BaseController@create');
Route::get('/update', 'VehicleController@update');
Route::get('/delete{id}', 'VehicleController@delete');
Route::post('/vehicle/insert', 'VehicleController@insert');