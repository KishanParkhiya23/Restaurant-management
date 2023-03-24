<?php

namespace Database\Seeders;

use App\Models\Story;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;


class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stories = Config::get('constants.stories');

        foreach ($stories as $item) {
            Story::create([
                "title" => $item['title'],
                "description" => $item['description'],
                "date" => $item['date'],
                "image" => $item['image']
            ]);
        }
    }
}
