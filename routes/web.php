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

// Signin with Twitter Routes
Route::get('twitter_login', "TwitterController@login");
Route::get('callback', "TwitterController@callback")->name('twitter.callback');
// End Signin with Twitter Routes

Route::post('/signup', "UserController@signup")->name('signup');
Route::post('/signin', "UserController@signin")->name('signin');
Route::get('/logout', 'UserController@logout')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
