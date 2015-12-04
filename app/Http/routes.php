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
Route::get('/', 'UserController@index');
Route::post('/', 'HomeController@postAdicionar');

Route::get('/home', 'HomeController@index');

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
Route::get('historico', function () {
    return view('site.informacoes.historico-doenca');
});

Route::get('atendimento-medico', function () {
    return view('site.informacoes.atendimento-medico');
});
 
Route::get('projects/jsModal', 'HomeController@loadJsModalForm');


Route::get('/alerta', function(){
    return View::make('site.mapa.alerta');
});

Route::post('/alerta', 'alertaController@index');

Route::post('/voluntario', 'VController@index');

Route::get('/mapa', 'MapaController@index');

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
Route::get('/novidades', 'NovidadesController@index');

Route::get('/posts/{id}', 'NovidadesController@show');

Route::get('/agenda', 'NovidadesController@agenda');

Route::get('/midia', function () {
    return view('site.novidades.midia');
});

Route::get('entrevistas', function () {
    return view('site.novidades.novidades');
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
Route::get('api/users', ['middleware' => 'cors', function()
{
    return \Response::json(\App\User::get(), 200);
}]);

Route::get('api/markers', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Mark::get(), 200);
}]);

Route::get('api/contributors', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Contributor::get(), 200);
}]);

Route::get('api/posts', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Posts::get(), 200);
}]);

Route::get('api/news', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Posts::get()->where('category_id', 4), 200);
}]);

Route::get('email', function(){
    
    Mail::raw('Novo voluntário cadastrado', function($m){
        $m->to('mariliasemdengue@marilia.sp.gov.br','Marilia sem Dengue')
          ->bcc('faq@sotaquepropaganda.com.br','Marilia sem Dengue')
          ->subject('Novo voluntário cadastrado no site');
    });

    return \Redirect::to('/home');

});

