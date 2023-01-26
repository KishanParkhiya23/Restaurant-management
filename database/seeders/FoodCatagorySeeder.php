<?php

namespace Database\Seeders;

use App\Models\MenuCatagory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class FoodCatagorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catagories = Config::get('constants.catagory');
        foreach ($catagories as $catagory) {
            MenuCatagory::create([
                "catagory" => $catagory['catagory']
            ]);
        }
    }
}
