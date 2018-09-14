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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/add-property', 'property\PropertyController@index')->middleware('auth');
Route::post('/upload-property','property\PropertyController@store')->name('upload-property');

Route::prefix('admin')->group(function () {
    Route::get('/login', 'admin\AdminLoginController@showLoginForm')->name('admin-login');
    Route::post('/login', 'admin\AdminLoginController@login')->name('admin-login-submit');
    Route::get('/' ,'admin\DashboardController@index')->name('admin-dashboard');
    Route::get('/create-new-role', 'admin\RoleController@index')->name('create-new-role');
    Route::post('/create-new-role', 'admin\RoleController@createNewRole')->name('create-new-role');
    Route::get('/all-users' ,'admin\DashboardController@index')->name('all-users');

});
