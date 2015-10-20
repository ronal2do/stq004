<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NovidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {        
        $posts = DB::table('posts')->where('categoria_id', '=', 4)->get();
        return view('novidades.novidades', compact('posts'));
    }
}
