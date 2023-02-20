<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu()
    {
        $breakfast = Menu::where('is_set',1)->where('type',1)->get();
        $lunch = Menu::where('is_set',1)->where('type',2)->get();
        $dinner = Menu::where('is_set',1)->where('type',3)->get();
        $drinks = Menu::where('is_set',1)->where('type',4)->get();
        $desserts = Menu::where('is_set',1)->where('type',5)->get();
        $wine = Menu::where('is_set',1)->where('type',6)->get();

        return view('Client_side.Menu',compact('breakfast','lunch','dinner','drinks','desserts','wine'));
    }
}
