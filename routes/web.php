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

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('colors', 'ColorController');
    Route::resource('types', 'TypeController');
    Route::resource('teams', 'TeamController');
    Route::resource('fights', 'FightController');
    Route::resource('roosters', 'RoosterController');
});
