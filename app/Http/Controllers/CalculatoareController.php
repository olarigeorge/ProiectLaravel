<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculatoareController extends Controller{

    /**
     * Display a listing  of the resource
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=1;
        $articole = DB::table('articles')
        ->select("*")
        ->join('categories','articles.category_id', '=', 'categories.id')
        ->where('articles.category_id',$id)
        ->orderBy('date','DESC')
        ->get();
        $tags = DB::table('tags') ->get();
        return view('/home',['articole'=>$articole,'tags'=>$tags]);
    }


}