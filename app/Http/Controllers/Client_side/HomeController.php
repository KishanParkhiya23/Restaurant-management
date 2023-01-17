<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $chefs = Chef::where('is_set',1)->take(4)->get();
        return view('client_side.home',compact('chefs'));
    }
}
