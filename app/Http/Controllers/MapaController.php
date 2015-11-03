<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {        
        $marker = DB::table('markers')->get();
       
        return view('site.mapa.mapa', compact('marker'));
    }
}
