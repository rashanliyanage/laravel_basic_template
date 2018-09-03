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
Route::resources(['/dashboard' => 'admin\DashboardController']);


Route::view('/add-property', '/property/add-property');
Route::post('/upload-property','property\PropertyController@store')->name('upload-property');
