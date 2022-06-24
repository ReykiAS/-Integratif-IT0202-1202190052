<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
             //'name' => 'tempo',
             //'url' =>'http://rss.tempo.co/nasional',
            //'name' => 'kbs',
            //'url' =>'http://world.kbs.co.kr/rss/rss_news.htm?lang=i',
            'name' => 'culture',
            'url' =>'http://world.kbs.co.kr/rss/rss_news.htm?lang=i&id=Cu',
        ]);
    }
}
