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
    return view('welcome2');
});

Route::resource('babies', 'BabiesController');

// Feedings
Route::resource('/babies/{id}/feedings', 'FeedingsController');

// Naps
Route::resource('/babies/{id}/naps', 'NapsController');

// Diapers
Route::resource('/babies/{id}/diapers', 'DiapersController');

// Medications
Route::resource('/babies/{id}/medications', 'MedicationsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
