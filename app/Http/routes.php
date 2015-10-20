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

/**
* Informações
*/
Route::get('/', function () {
    return view('site.home');
});
Route::get('/elementos', function () {
    return view('site.elementos');
});
/**
* prevencao
*/
Route::get('acoes-prefeitura', function () {
    return view('site.prevencao.acoes-prefeitura');
});
Route::get('acoes-individuais', function () {
    return view('site.prevencao.acoes-individuais');
});
/**
* informacoes
*/
Route::get('caracteristicas', function () {
    return view('site.informacoes.caracteristicas');
});
Route::get('historico-doenca', function () {
    return view('site.informacoes.historico-doenca');
});
Route::get('historico-marilia', function () {
    return view('site.informacoes.historico-marilia');
});
Route::get('atendimento-medico', function () {
    return view('site.informacoes.atendimento-medico');
});
/**
* Mapa
*/
Route::get('alerta', function () {
    return view('site.mapa.alerta');
});
Route::get('mapa', function () {
    return view('site.mapa.mapa');
});
Route::get('como-contribuir', function () {
    return view('site.mapa.como-contribuir');
});
/**
* parceiros
*/
Route::get('comite-municipal', function () {
    return view('site.parceiros.comite-municipal');
});
Route::get('comites-regionais', function () {
    return view('site.parceiros.comites-regionais');
});
Route::get('parceiros', function () {
    return view('site.parceiros.parceiros');
});
Route::get('como-participar', function () {
    return view('site.parceiros.como-participar');
});
/**
* novidades
*/
Route::get('novidades', function () {
    return view('site.novidades.novidades');
});
Route::get('novidades/{id}', function () {
    return view('site.novidades.post');
});
Route::get('agenda', function () {
    return view('site.novidades.novidades');
});
Route::get('agenda/{id}', function () {
    return view('site.novidades.post');
});
Route::get('recall', function () {
    return view('site.novidades.novidades');
});
Route::get('recall/{id}', function () {
    return view('site.novidades.post');
});
Route::get('entrevistas', function () {
    return view('site.novidades.novidades');
});
Route::get('entrevistas/{id}', function () {
    return view('site.novidades.post');
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

Route::get('news', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Posts::get()->where('id', 4), 200);
}]);


