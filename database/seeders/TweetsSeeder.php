<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('tweets')->insert([
                [
                    'name' => 'Johni',
                    'handle' => '@johni',
                    'image' => 'https://randomuser.me/api/portraits/men/40.jpg',
                    'tweet' => 'Just spent a couple of hours on the roof, finishing off a new route. The sun was setting and the view was stunning. #Rockclimbing',
                    'file' => '/videos/1.mp4',
                    'is_video' => true,
                    'comments' => '35',
                    'retweets' => '54',
                    'likes' => '23',
                    'analytics' => '81',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ],

            ]);
            DB::table('tweets')->insert([
                'name' => 'Andre Carpenter',
                'handle' => '@andrecarpenter',
                'image' => 'https://randomuser.me/api/portraits/men/7.jpg',
                'tweet' => "Do you wanna learn Javascript? I'm gonna make a Udemy tutorial to show you all how easy it is.",
                'file' => '/images/Code.png',
                'is_video' => false,
                'comments' => '83',
                'retweets' => '59',
                'likes' => '62',
                'analytics' => '66',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    
            DB::table('tweets')->insert([
                'name' => 'Josephine Perry',
                'handle' => '@josephineperry',
                'image' => 'https://randomuser.me/api/portraits/women/59.jpg',
                'tweet' => "Just made a new SEO marketing video. Take a look!!! The good news is that there are several search engine optimization (SEO) tools out there — some free, some paid — that can help you view",
                'file' => '/videos/Seo.mp4',
                'is_video' => true,
                'comments' => '56',
                'retweets' => '54',
                'likes' => '78',
                'analytics' => '21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    
            DB::table('tweets')->insert([
                'name' => 'Avis Glover',
                'handle' => '@avisglover',
                'image' => 'https://randomuser.me/api/portraits/men/77.jpg',
                'tweet' => "I've never seen ANYONE play guitar as good as this!!! Many guitarists neglect the theory side of things because it's perceived as boring, pretentious, or even just a complete f*ing mystery. It's true that some musicians, especially those with natural abilities like perfect pitch or an especially good ear, can excel without much background theory. But do not underestimate the power of this knowledge in developing you as a musician",
                'file' => '/images/PlayGuitar.png',
                'is_video' => false,
                'comments' => '94',
                'retweets' => '29',
                'likes' => '33',
                'analytics' => '89',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            DB::table('tweets')->insert([
                'name' => 'Alexis Thompson',
                'handle' => '@alexisthompson',
                'image' => 'https://randomuser.me/api/portraits/women/51.jpg',
                'tweet' => "Just published my first book on advanced CSS. If you're a web developer or designer, get your copy today!",
                'is_video' => false,
                'comments' => '104',
                'retweets' => '18',
                'likes' => '22',
                'analytics' => '109',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            DB::table('tweets')->insert([
                'name' => 'Elliot Scott',
                'handle' => '@elliotscott',
                'image' => 'https://randomuser.me/api/portraits/women/52.jpg',
                'tweet' => "I've been working on a new project for the past 6 months and I'm excited to announce that it's finally ready to launch! Stay tuned for more information.",
                'is_video' => false,
                'comments' => '78',
                'retweets' => '39',
                'likes' => '56',
                'analytics' => '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
