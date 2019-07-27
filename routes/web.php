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
    $login = "this is the route ";
    $parties = "this is the route for all parties";
    $party ="this is the route to show a single party";
    $store="this is the store route";
    $put = "this is the route for the update route.";
    $delete = "this is the route for the delete";
    return view('welcome')
    ->with('login',$login)
    ->with('parties',$parties)
    ->with('party',$party)
    ->with('store',$store)
    ->with('put',$put)
    ->with('delete',$delete);
});
