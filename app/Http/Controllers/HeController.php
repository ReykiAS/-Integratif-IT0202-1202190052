<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HeController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->select('id','title','img_url','description','rss_id','source_url') -> where('rss_id', '3') 
        ->orderBy('id','DESC')->get();
        return view('health')->with('news', $news);

    }
}
