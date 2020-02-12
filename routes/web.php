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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'landing');

# the pets routes
Route::get('/pets', 'PetsController@index');
Route::get('/pets/adopt', 'PetsController@add');
Route::post('/pets/adopt', 'PetsController@create');
Route::get('/pets/release/{id}', 'PetsController@release');

# the shops routes
Route::get('/shops', 'ShopsController@index')->name('shops');
Route::get('/shops/{id}', 'ShopsController@shop');
Route::post('/shops/{id}/order', 'ShopsController@order');