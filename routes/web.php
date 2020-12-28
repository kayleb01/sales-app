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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/sales', 'salesController@index')->middleware('auth');
Route::get('addProduct', 'ProductsController@create')->middleware('auth');
Route::post('/addProduct', 'ProductsController@store')->name('addProduct');
Route::get('/moderate', 'ProductsController@moderate');
Route::get('/credit', 'salesController@credit');
Route::post('/makeCredit', 'salesController@makeCredit');
Route::post('/makeSales', 'salesController@store');