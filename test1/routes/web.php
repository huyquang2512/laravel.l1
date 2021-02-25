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
Route::get('/about', 'MyController@about')->name('pages.layout_content.about');
Route::get('/contact', 'MyController@contact')->name('pages.layout_content.contact');
Route::get('/', 'MyController@select')->name('pages.layout_content.welcome');
Route::get('validate', 'MyController@validateView');
Route::post('validate', 'MyController@validatedata');
Route::get('insert', 'MyController@insert');
Route::post('insert', 'MyController@add');
Route::group(['prefix'=>'session'], function(){
    Route::get('set', 'MyController@setSession');
    Route::get('get', 'MyController@getSession');
});
Route::get('table', 'MyController@table');
Route::get('getTitle', 'MyController@getTitle');
Route::get('acction/table/edit/{id}', 'MyController@show');
Route::post('acction/table/edit/edit', 'MyController@update');
Route::get('acction/table/delete/{id}', 'MyController@delete');