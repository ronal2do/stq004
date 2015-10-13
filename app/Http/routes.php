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

Route::get('privacidade', function () {
    return view('site.privacidade');
});

Route::get('alerta', function () {
    return view('site.alerta');
});

Route::get('termos', function () {
    return view('site.termos');
});

Route::get('users', ['middleware' => 'cors', function()
{
    return \Response::json(\App\User::get(), 200);
}]);

Route::get('markers', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Mark::get(), 200);
}]);


Route::get('contributors', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Contributor::get(), 200);
}]);


Route::get('posts', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Posts::get(), 200);
}]);


