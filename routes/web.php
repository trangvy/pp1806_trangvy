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

Route::get('/users', 'UsersController@index')->name('users.index');

Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
Route::get('/users/{id}', 'UsersController@show')->name('users.show');
Route::post('/users/{id}', 'UsersController@update')->name('users.update');
Route::post('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');
