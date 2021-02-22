<?php

use Illuminate\Support\Facades\Route;
use App\welcomeModel;
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
Route::get('validate', 'myController@validateView');
Route::post('validate', 'myController@validatedata');
Route::get('insert', 'myController@insert');
Route::post('insert', 'myController@add');
Route::group(['prefix'=>'session'], function(){
    Route::get('set', 'myController@setSession');
    Route::get('get', 'myController@getSession');
});
Route::get('table', 'myController@table');
Route::get('getTitle', 'myController@getTitle');
Route::get('acction/table/edit/{id}', 'myController@show');
Route::post('acction/table/edit/edit', 'myController@update');
Route::get('acction/table/delete/{id}', 'myController@delete');