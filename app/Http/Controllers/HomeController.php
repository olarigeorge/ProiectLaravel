<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articole = DB::table('articles') ->orderBy('date','DESC')->get();
        $tags = DB::table('tags') ->get();
        return view('/home',['articole'=>$articole,'tags'=>$tags]);
    }
}
