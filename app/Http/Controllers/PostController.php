<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function detail($id)
    {
        if (strlen($string) > 35) {

            // truncate string
            $stringCut = substr($string, 0, 35);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '...';
    }
        $detail = DB::table('news')->select('id','title','img_url','description','rss_id','source_url')->where('id', $id)->first();
        return view('post_berita', ['detail'=>$detail]);
    }
}

