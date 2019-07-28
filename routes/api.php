<?php

use Illuminate\Http\Request;

Route::get('/parties','PartyController@index');

Route::post('/party/{id}','PartyController@update');

Route::get('/party/{id}','PartyController@show');

Route::post('/party','PartyController@store');

Route::delete('/party/{id}','PartyController@destroy');

// User routes
Route::post('/register','api\LoginController@store');

Route::post('/login','api\LoginController@login');

Route::get('/user/{key}','api\LoginController@user');


