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
Route::get('/create/vehicle', 'BaseController@createVehicle');
Route::get('/create/brand', 'BaseController@createBrand');
// Route::get('/update', 'VehicleController@update');
Route::get('/vehicle/delete/{id}', 'VehicleController@delete');
Route::get('/vehicle/update/{id}', 'BaseController@updateVehicle');
Route::post('/vehicle/insert', 'VehicleController@insert');
Route::post('/vehicle/update', 'VehicleController@updateAction');
Route::post('/brand/insert', 'BrandController@insert');
Route::get('/brand/update/{id}', 'BaseController@updateBrand');