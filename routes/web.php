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

Route::get('/', '\App\Http\Controllers\MainController@home')->name('home');

Route::get('/createPost', '\App\Http\Controllers\MainController@createPost');

Route::post('/createPost/check', '\App\Http\Controllers\MainController@showPost');




