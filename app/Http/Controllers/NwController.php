<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class NwController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->select('id','title','img_url','description','rss_id','source_url') -> where('rss_id', '1') 
        ->orderBy('id','DESC')->get();
        return view('news')->with('news', $news);

    }
    public function pagination()
    {
        $news1 = DB::table('news')->paginate(10);
        return view('news',['news' => $news1]);
       

    }
   
}
