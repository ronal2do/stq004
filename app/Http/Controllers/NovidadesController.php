<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Posts;
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
        $posts = DB::table('posts')
            ->orderBy('id', 'desc')
            ->paginate(9);
        return view('site.novidades.novidades', compact('posts'));
    }

    public function show($id)
    {
        $post = Posts::find($id);
        $postagems = DB::table('posts') 
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('site.novidades.posts', compact('post','postagems'));
    }

    public function agenda()
    {
       
        $postagems = DB::table('posts') 
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();
        return view('site.novidades.agenda', compact('postagems'));
    }
}
