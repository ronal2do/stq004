<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
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
}
