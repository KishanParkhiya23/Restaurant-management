<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $chefs = Chef::where('is_set', 1)->take(4)->get();
        $totalMenuItem = Menu::where('is_set',1)->get();
        $menu = Menu::whereType(2)->where('is_set',1)->first();
        $menu =
            array_merge(
                [$menu],
                [Menu::whereType(1)->where('is_set',1)->first()],
                [Menu::whereType(3)->where('is_set',1)->first()],
                [Menu::whereType(4)->where('is_set',1)->first()],
                [Menu::whereType(5)->where('is_set',1)->first()],
                [Menu::whereType(6)->where('is_set',1)->first()]
            );
        return view('client_side.home', compact('chefs', 'menu','totalMenuItem'));
    }
}
