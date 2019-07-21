<?php

use Illuminate\Http\Request;

// Yanik routes
Route::get('/parties','PartyController@index');

Route::get('/party/{id}','PartyController@show');

Route::post('/party','PartyController@store');

Route::put('/party/{id}','PartyController@update');

Route::delete('/party/{id}','PartyController@destroy');

// User routes
Route::post('/register','api\LoginController@store');

Route::post('/login','api\LoginController@login');

Route::get('/user/{key}','api\LoginController@user');


// Tim routes
Route::get('/cars','SalesController@index');

Route::post('/car','SalesController@store');

Route::get('/car/{id}','SalesController@show');

Route::put('/car/{id}','SalesController@update');

Route::delete('/car/{id}','SalesController@destroy');

Route::put('/notification/{id}','SalesController@notificationUpdate');

Route::get('/notifications','SalesController@notifcations');
