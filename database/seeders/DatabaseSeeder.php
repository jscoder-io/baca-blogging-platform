<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Setting;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        collect([
            ['title' => 'How to Never Check Luggage Again'],
            ['title' => 'An Ideal Day (or Weekend) in San Francisco – 16 Fun and Weird Activities'],
            ['title' => 'How to Travel to Exotic, Expensive Cities on $50 a Day'],
            ['title' => 'How to Travel: 21 Contrarian Rules'],
            ['title' => 'How to Travel Through 20+ Countries with Free Room and Board'],
            ['title' => 'How to Ski Powder – 15 Tips for Learning in 24 Hours'],
            ['title' => '8 Exotic Destinations You Can Afford']
        ])->map(function ($value) {
            $value['intro']   = $this->defaultPostIntro();
            $value['content'] = $this->defaultPostContent();
            return $value;
        })->each(function ($value) {
            (new Post($value))->save();
        });

        collect([
            ['path' => 'blog.author.name', 'value' => 'Tim Ferriss'],
            ['path' => 'blog.author.job_title', 'value' => 'Host of The Tim Ferriss Show'],
            ['path' => 'blog.author.bio', 'value' => 'Tim Ferriss has been listed as one of <i>Fast Company\'s</i> "Most Innovative Business People" and one of <i>Fortune\'s</i> "40 under 40." He is an early-stage technology investor/advisor (Uber, Facebook, Shopify, Duolingo, Alibaba, and 50+ others) and the author of five #1 New York Times and Wall Street Journal bestsellers, including The 4-Hour Workweek and Tools of Titans: The Tactics, Routines, and Habits of Billionaires, Icons, and World-Class Performers. The Observer and other media have called Tim "the Oprah of audio" due to the influence of The Tim Ferriss Show podcast, which is the first business/interview podcast to exceed 100 million downloads. It has now exceeded 800 million downloads.']
        ])->each(function ($value) {
            (new Setting($value))->save();
        });
    }

    protected function defaultPostIntro()
    {
        return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
    }

    protected function defaultPostParagraph()
    {
        return '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
    }

    protected function defaultPostContent()
    {
        $paragraph = [];
        for ($i=0; $i<6; $i++) {
            $paragraph[] = $this->defaultPostParagraph();
        }
        return implode("\n", $paragraph);
    }
}
