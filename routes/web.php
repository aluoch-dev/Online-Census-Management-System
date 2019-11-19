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

Auth::routes();

//Household Routes
Route::get('household/create','HouseholdController@create')->name('createHousehold'); 
Route::get('autocomplete', 'HouseholdController@search');
Route::post('household/store', 'HouseholdController@store')->name('storeHousehold');



