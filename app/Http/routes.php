<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('site.index');
});


header('Access-Control-Allow-Origin: http://localhost:8100');
Route::get('markers', function () {
  	return \App\Mark::get()
  		->toJson();
});


Route::get('users', function () {
  	return App\User::get()
  		->toJson();
});

Route::get('marcas', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Mark::take(100)->get(), 200);
}]);

