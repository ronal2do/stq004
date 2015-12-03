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
    private $voluntario;

    public function __construct(
            Request $request,
            Voluntario $voluntario
        ){
        $this->request = $request;
        $this->voluntario = $voluntario;
    }
 
    public function postAdicionar()
    {   
        $dadosForm = $this->request->all();     
        
        $this->voluntario->create($dadosForm)->save();

        Alert::success('Em breve entraremos em contato', 'Parabéns!')->autoclose(3500);

        //$this->disparaEmail($dadosForm['email']);
        $email = $dadosForm['email'];

        Mail::send('emails.voluntario', ['email' => $email], function ($m) use ($email) {
            $m->to($email)
              ->bcc('ronal2do@gmail.com')
              ->subject('Marília cada vez mais perto de combater a dengue');
        });

        return View::make('site.mapa.mapa');
    } 


 	public function disparaEmail($dadosForm){

 		$email = $dadosForm['email']; 

 		Mail::send('emails.cadastro', ['email' => $email], function ($m) use ($email) {
            $m->to($email)
              ->bcc('ronal2do@gmail.com')
              ->subject('Marília cada vez mais perto de combater a dengue');
        });

 	}
}
