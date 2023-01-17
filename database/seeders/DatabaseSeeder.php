<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(30)->create();
        $chefs = Config::get('constants.chefs');
        foreach($chefs as $chef){
            Chef::create([
                "name" => $chef['name'],
                "speciality" => $chef['speciality'],
                "image" => $chef['image'],
                "discription" => $chef['discription'],
                "is_set" => 1
            ]);
        }
    }
}
