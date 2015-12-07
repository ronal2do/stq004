<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use Illuminate\Http\Request;
use App\Mark;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Facades\Redirect;

class alertaController extends Controller
{
    

    private $request;
    private $user;

    public function __construct(
            Request $request,
            Mark $user
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
       // dd($dadosForm);
        $user = $dadosForm['email']; 
        $end = $dadosForm['address']; 
        $des = $dadosForm['description']; 
        $nom = $dadosForm['name']; 
            
        $this->user->create($dadosForm)->save();

       /* Mail::send('emails.alerta', ['email' => $user, 'address' => $end, 'description' => $des, 'name' => $nom], function ($m) use ($user, $end ,$des) {
            
            $m->to($user)
              ->cc('mariliasemdengue@marilia.sp.gov.br','Marília sem Dengue')
              ->bcc('faq@sotaquepropaganda.com.br','Marília sem Dengue')
              ->subject("Nova denúncia - ".$end);
        });*/

        Alert::success('Em breve entraremos em contato com você '.$nom, 'Obrigado!')->autoclose(3500);

        return Redirect::to('/mapa');
    }  

}
