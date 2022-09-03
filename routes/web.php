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

Route::get('/', 'ThreadController@index');
Route::post('/', 'ThreadController@create')->middleware('auth');
Route::get('/thread', 'PostController@index');
Route::post('/thread', 'PostController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');