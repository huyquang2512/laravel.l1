<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$namespace = '\App\Http\Controllers';

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('my-controller', 'myControllerApi');
Route::put('edit/{id}', 'myControllerApi@update');
Route::delete('delete/{id}', 'myControllerApi@destroy');
Route::get('search/{Title}', 'myControllerApi@search');