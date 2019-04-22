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

Route::get('/create-customer', 'CustomerController@index')->name('create-customer');
Route::post('/create-customer', 'CustomerController@store');
Route::get('/edit-customer/{id}', 'CustomerController@edit')->name('edit-customer');
Route::post('/edit-customer/{id}', 'CustomerController@update');
Route::get('/delete-customer/{id}', 'CustomerController@destroy')->name('delete-customer');
Route::get('/show-customer/{id}', 'CustomerController@show')->name('show-customer');
