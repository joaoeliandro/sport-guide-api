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

Route::post('/athlete', 'AthleteController@create');
Route::get('/athlete/:id', 'AthleteController@index');
Route::get('/athlete', 'AthleteController@show');
Route::delete('/athlete/:id', 'AthleteController@delete');
