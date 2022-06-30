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
            //   'name' => 'tempo',
            //   'url' =>'http://rss.tempo.co/nasional',
            // 'name' => 'climate',
            // 'url' =>'https://news.un.org/feed/subscribe/en/news/topic/climate-change/feed/rss.xml',
             'name' => 'health',
              'url' =>'https://news.un.org/feed/subscribe/en/news/topic/health/feed/rss.xml',
            
        ]);
    }
}
