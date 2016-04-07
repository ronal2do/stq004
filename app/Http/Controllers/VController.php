<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use Illuminate\Http\Request;
use App\Voluntario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Facades\Redirect;

class VController extends Controller
{
    

    private $request;
    private $user;

    public function __construct(
            Request $request,
            Voluntario $user
        ){
        $this->request = $request;
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dadosForm = $this->request->all();
       //dd($dadosForm);
        $user = $dadosForm['email']; 
        $end = $dadosForm['bairro']; 
        $des = $dadosForm['tel']; 
        $nom = $dadosForm['name']; 
      
        $this->user->create($dadosForm)->save();

        Mail::send('emails.voluntario', ['email' => $user, 'bairro' => $end, 'tel' => $des, 'name' => $nom], function ($m) use ($user, $end ,$des, $nom) {
            
            $m->to($user)
              ->cc('mariliasemdengue@marilia.sp.gov.br','Marília sem Dengue')
              ->bcc('faq@sotaquepropaganda.com.br','Marília sem Dengue')
              ->subject("Novo voluntário cadastrado - ".$nom);
        });

        Alert::success('Em breve entraremos em contato com você '.$nom, 'Obrigado!')->persistent("Fechar");

        return Redirect::to('/home');
    }  

}
