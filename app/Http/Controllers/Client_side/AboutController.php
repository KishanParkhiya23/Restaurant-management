<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $chefs = Chef::all();
        return view('Client_side.about',compact('chefs'));
    }
}
