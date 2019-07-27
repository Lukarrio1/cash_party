<?php

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

Route::get('/', function () {
    $login = "http://159.65.220.145/api/login";
    $parties = "http://159.65.220.145/api/parties";
    $party ="http://159.65.220.145/api/party/{id}";
    $store="http://159.65.220.145/api/party";
    $put = "this is the route for the update route.";
    $delete = "http://159.65.220.145/api/party/{id}";
    return view('welcome')
    ->with('login',$login)
    ->with('parties',$parties)
    ->with('party',$party)
    ->with('store',$store)
    ->with('put',$put)
    ->with('delete',$delete);
});
