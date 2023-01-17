<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $chefs = Chef::all()->take(4);
        // dd($chefs);
        return view('Client_side.about',compact('chefs'));
    }
}
