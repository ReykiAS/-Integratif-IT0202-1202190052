<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rss;
use App\Models\news;

class newsController extends Controller
{
    public function aggregrate($id_rss = 1){
       
        $rss = Rss::findOrFail($id_rss);
        $xmlContent = file_get_contents($rss->url);
        $xml = simplexml_load_string($xmlContent);
     

        
        foreach($xml->channel->item as $item){
            $data= array(
                'title' => $item->title,
                'img_url' => $item ->img,
                'description' => $item->description,
                'source_url' => $item->link,
                'rss_id' => $id_rss
            );
            news::Create($data);
        }

        // get from news
        $news= news::where('rss_id', $id_rss)->get();
        foreach($news as $n){
            print_r($n->title ."<br>".$n->description);
            print_r("<br><br><br><br>");    
        }
    }
    public function aggregrat($id_rss){
        $rss = Rss::findOrFail($id_rss);

        $xmlContent = file_get_contents($rss->url);
        $xml = simplexml_load_string($xmlContent);



        foreach($xml->channel->item as $item){
            $data= array(
                'title' => $item->title,
                'img_url' => $item->enclosure['url'],
                'description' => $item->description,
                'source_url' => $item->link,
                'rss_id' => $id_rss
            );
            news::Create($data);

        }

        $news= news::where('rss_id', $id_rss)->get();
        foreach($news as $n){
            print_r($n->title ."<br>".$n->description);
            print_r("<br><br><br><br>");    
        }
    }
    public function all()
    {
        $news = static::all();
        return $news -> firstWhere('id_news','$id_news');
    }

}
