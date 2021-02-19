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

// Route::get('/', 'myController@index')->name('pages.layout_content.welcome');
Route::get('/about', 'myController@about')->name('pages.layout_content.about');
Route::get('/contact', 'myController@contact')->name('pages.layout_content.contact');
Route::get('/', 'myController@select')->name('pages.layout_content.welcome');