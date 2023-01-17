<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $chefs = Chef::where('is_set',1)->take(4)->get();
        return view('Client_side.about',compact('chefs'));
    }
}
