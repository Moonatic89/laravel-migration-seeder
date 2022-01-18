<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('welcome');
Route::get('flights', 'FlightController@index')->name('flights');
Route::get('flights/{flight}', 'FlightController@show')->name('flight');
Route::get('articles', 'ArticleController@index')->name('articles');
Route::get('articles/{article}', 'ArticleController@show')->name('article');