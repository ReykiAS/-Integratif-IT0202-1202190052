<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClController extends Controller
{
    public function index()
    {
        $climate = DB::table('news')->select('id','title','img_url','description','rss_id','source_url') -> where('rss_id', '2') 
        ->orderBy('id','DESC')->get();
        return view('climate')->with('climate', $climate);

    }
}
