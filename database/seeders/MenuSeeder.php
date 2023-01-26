<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = Config::get('constants.menu');
        foreach($menu as $item){
            Menu::create([
                "name" => $item['name'],
                "image" => $item['image'],
                "poppings" => $item['poppings'],
                "prize" => $item['prize'],
                "type" => $item['type']
            ]);
        }
    }
}
