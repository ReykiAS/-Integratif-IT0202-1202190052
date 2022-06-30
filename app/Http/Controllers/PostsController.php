<?php

namespace App\Http\Controllers;
Use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        
        $news = DB::table('news')->select('id','title','img_url','description','rss_id','source_url') ->get();

        return view('welcome')->with('news', $news);

    }
    
    public function Post()
    {
        $user = DB::table('news')
        ->where ('rss_id','1')
        ->join('rss', 'news.rss_id', 'rss.id')
        ->select('news.*', 'rss.name as rss_name')
        ->first();
        // dd($user->no);
        return view ('welcome')->with('news', $news);;
    }
   
    
  

  
}
