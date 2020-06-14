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

Route::get('/', "RouteController@index");
Route::get('/signin', "RouteController@signin");
Route::get('/signup', "RouteController@signup");
Route::get('/dashboard', "RouteController@dashboard");
Route::get('/publisher', "RouteController@publisher");
