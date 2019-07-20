<?php

use Illuminate\Http\Request;

Route::get('/parties','PartyController@index');

Route::get('/party/{id}','PartyController@show');

Route::post('/party','PartyController@store');

Route::put('/party/{id}','PartyController@update');

Route::delete('/party/{id}','PartyController@destroy');

Route::post('/register','api\LoginController@store');

Route::post('/login','api\LoginController@login');

Route::get('/user/{key}','api\LoginController@user');
