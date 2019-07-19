<?php

use Illuminate\Http\Request;

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

Route::get('/parties','PartyController@index');

Route::get('/party/{id}','PartyController@show');

Route::post('/party','PartyController@store');

Route::put('/party/{id}','PartyController@update');

Route::delete('/party/{id}','PartyController@destroy');

Route::post('/register','api\LoginController@store');

Route::post('/login','api\LoginController@login');

Route::get('/user/{key}','api\LoginController@user');