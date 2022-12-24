<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function stories()
    {
        return view('Client_side.stories');
    }
}
