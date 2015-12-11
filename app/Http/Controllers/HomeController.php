<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    

    private $request;
    private $user;

    public function __construct(
            Request $request,
            User $user
        ){
        $this->request = $request;
        $this->user = $user;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        
        $posts = DB::table('posts')            
            ->take(6)
            ->orderBy('id', 'desc')
            ->get();
        return view('site.home', compact('posts'));
    }

    public function missingMethod($parameters = array()) {
        return view('errors.503');
    }

    public function postAdicionar()
    {
        $posts = DB::table('posts')            
            ->take(6)
            ->orderBy('id', 'desc')
            ->get();
        $dadosForm = $this->request->all();
        $user = $dadosForm['email'];       
        $this->user->create($dadosForm)->save();

        Mail::send('emails.cadastro', ['email' => $user], function ($m) use ($user) {
            $m->to($user)
              // ->cc('mariliasemdengue@marilia.sp.gov.br','Marília sem Dengue')
              ->cc('faq@sotaquepropaganda.com.br','Marília sem Dengue')
              ->subject('Movimento Marília sem Dengue');
        });

        Alert::success('Em breve entraremos em contato', 'Parabéns!')->persistent("Fechar");

        return Redirect::to('/home');
    }  

}
