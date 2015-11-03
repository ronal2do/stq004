<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $this->user->create($dadosForm)->save();
        return view('site.home', compact('posts'));
    }


}
