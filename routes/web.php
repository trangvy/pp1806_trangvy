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


Route::get('/orders', 'OrdersController@index')->name('orders.index');

Route::get('/orders/{order}', 'OrdersController@show')->name('orders.show');

Route::get('/orders/create', 'OrdersController@create')->name('orders.create')->middleware('auth');

Route::get('/orders/{order}/edit', 'OrdersController@edit')->name('orders.edit');

Route::post('/orders/{id}', 'OrdersController@update')->name('orders.update');

Route::post('/orders', 'OrdersController@store')->name('orders.store');