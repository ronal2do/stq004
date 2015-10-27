<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
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
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function postAdicionar()
    {

        $dadosForm = $this->request->all();

        $this->user->create($dadosForm)->save();

        $status = "Usuário" +$dadosForm['email']."foi adicionado!";

        $this->request->session()->flash('status', $status);

        $this->disparaEmail($dadosForm['email']);

    }

    public function disparaEmail($email)
    {
        Mail::send('emails.reminder', ['email' => $email], function ($m) use ($email) {
            $m->to($email)
              ->subject('Teste!');
        });
    }
}