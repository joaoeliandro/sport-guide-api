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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/athlete', 'App\Http\Controllers\AthleteController@index');
Route::get('/athlete/{id}', 'App\Http\Controllers\AthleteController@show');
Route::post('/athlete', 'App\Http\Controllers\AthleteController@create');
Route::put('/athlete/{id}', 'App\Http\Controllers\AthleteController@update');
Route::delete('/athlete/{id}', 'App\Http\Controllers\AthleteController@delete');
