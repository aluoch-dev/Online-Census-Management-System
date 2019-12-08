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

Route::group(['middleware' => 'auth'], function () {
Route::get('/admin/index', 'AdminController@index')->name('admin');
Route::get('/enumerator/index', 'EnumeratorController@index')->name('enumerator');
Route::get('household/create','HouseholdController@create')->name('createHousehold'); 
Route::post('getstates','HouseholdController@getStates')->name('getStates');
Route::post('getcounties','HouseholdController@getCounties')->name('getCounties');
Route::post('getsubcounties','HouseholdController@getSubcounties')->name('getSubcounties');
Route::post('getamenities','HouseholdController@getAmenities')->name('getAmenities');
Route::post('getschools','HouseholdController@getSchools')->name('getSchools');
Route::post('household/store', 'HouseholdController@store')->name('storeHousehold');
Route::get('household/edit/{household}', 'HouseholdController@edit')->name('editHousehold');
Route::any('household/update/{household}', 'householdController@update')->name('updateHousehold');
Route::get('citizen/create', 'CitizenController@create')->name('createCitizen');
Route::post('citizen/store', 'CitizenController@store')->name('storeCitizen');
Route::get('citizen/index', 'CitizenController@index')->name('indexCitizen');
Route::get('citizen/edit/{citizen}', 'CitizenController@edit')->name('editCitizen');
Route::any('citizen/update/{citizen}', 'CitizenController@update')->name('updateCitizen');
Route::delete('citizen/destroy/{citizen}', 'CitizenController@destroy')->name('destroyCitizen');
Route::get('animal/create', 'AnimalController@create')->name('createAnimal'); 
Route::post('animal/store', 'AnimalController@store')->name('storeAnimal');
Route::get('animal/edit/{animal}', 'AnimalController@edit')->name('editAnimal');
Route::any('animal/update/{animal}', 'AnimalController@update')->name('updateAnimal');
Route::get('asset/create', 'AssetController@create')->name('createAsset');
Route::post('asset/store', 'AssetController@store')->name('storeAsset'); 
Route::get('asset/edit/{asset}', 'AssetController@edit')->name('editAsset'); 
Route::any('asset/update/{asset}', 'AssetController@update')->name('updateAsset'); 
Route::get('/home', 'HomeController@index')->name('home'); 
});
