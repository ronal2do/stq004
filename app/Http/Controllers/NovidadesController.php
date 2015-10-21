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
        $posts = DB::table('posts')->where('category_id', '=', 1)->get();
        return view('site.novidades.novidades', compact('posts'));
    }
}
