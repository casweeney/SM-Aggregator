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
Route::get('/signin', "RouteController@signin")->name('signin');
Route::get('/signup', "RouteController@signup")->name('signup');
Route::get('/dashboard', "RouteController@dashboard")->middleware('auth');
Route::get('/publisher', "RouteController@publisher");
Route::get('/new_post', "RouteController@new_post")->middleware('auth');

Route::post('/new_post', ['as'=>'post.tweet','uses'=>'RouteController@tweet'])->middleware('auth');

// Signin with Twitter Routes
Route::get('twitter_login', "TwitterController@login")->middleware('auth');
Route::get('callback', "TwitterController@callback")->name('twitter.callback')->middleware('auth');
// End Signin with Twitter Routes

Route::post('/signup', "UserController@signup")->name('signup');
Route::post('/signin', "UserController@signin")->name('signin');
Route::get('/logout', 'UserController@logout')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
