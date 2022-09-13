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
        // Posts samples
        collect($this->parse('posts.csv'))->each(function ($value) {
            $value['tags'] = explode(',', $value['tags']);
            (new Post($value))->save();
        });

        // Settings samples
        collect($this->parse('settings.csv'))->each(function ($value) {
            (new Setting($value))->save();
        });
    }

    protected function parse($filename)
    {
        $results = [];
        if (($handle = fopen(database_path('samples/'.$filename), 'r')) !== false) {
            $header = false;
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if ($header === false) {
                    $header = $data;
                } else {
                    $results[] = collect($header)->combine($data)->all();
                }
            }
            fclose($handle);
        }

        return $results;
    }
}
