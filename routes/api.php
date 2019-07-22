<?php

use Illuminate\Http\Request;

// Yanik routes
Route::get('/parties','PartyController@index');

Route::post('/party/{id}','PartyController@update');

Route::get('/party/{id}','PartyController@show');

Route::post('/party','PartyController@store');

Route::delete('/party/{id}','PartyController@destroy');

// User routes
Route::post('/register','api\LoginController@store');

Route::post('/login','api\LoginController@login');

Route::get('/user/{key}','api\LoginController@user');


// Tim routes
Route::get('/cars','SalesController@index');

Route::post('/car','SalesController@store');

Route::get('/car/{id}','SalesController@show');

Route::post('/car/{id}','SalesController@update');

Route::delete('/car/{id}','SalesController@destroy');

Route::get('/notification/{id}','SalesController@notificationUpdate');

Route::get('/notifications','SalesController@notifcations');
