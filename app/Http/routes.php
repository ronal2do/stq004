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
/**
* Informações
*/
Route::get('/home', function () {
    return view('site.home');
});
Route::get('/portfolio-item', function () {
    return view('site.item');
});
/**
* combate
*/
Route::get('combate', function () {
    return view('site.combate');
});
/**
* informacoes
*/
Route::get('informacoes', function () {
    return view('site.informacoes');
});
/**
* parceiros
*/
Route::get('parceiros', function () {
    return view('site.parceiros');
});
/**
* noticias
*/
Route::get('noticias', function () {
    return view('site.noticias');
});
/**
* Mapa
*/
Route::get('alerta', function () {
    return view('site.alerta');
});
Route::get('mapa', function () {
    return view('site.mapa');
});
/**
* Institucional
*/
Route::get('termos', function () {
    return view('site.termos');
});

Route::get('newsletter', function () {
    return view('site.mail');
});

Route::get('privacidade', function () {
    return view('site.privacidade');
});
/**
* facebook
*/
Route::get('loginFacebook', 'FacebookController@login');
Route::get('facebook', 'FacebookController@pageFacebook');
/**
* API
*/
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


