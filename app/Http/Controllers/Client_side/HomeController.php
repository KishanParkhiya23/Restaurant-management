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
        $menu = Menu::whereType(2)->first();
        $menu =
            array_merge(
                [$menu],
                [Menu::whereType(1)->first()],
                [Menu::whereType(3)->first()],
                [Menu::whereType(4)->first()],
                [Menu::whereType(5)->first()],
                [Menu::whereType(6)->first()]
            );
        // dd($menu);
        return view('client_side.home', compact('chefs','menu'));
    }
}
