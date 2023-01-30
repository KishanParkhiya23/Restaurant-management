<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function fprofile()
    {
    return view('client_side.Profile');
    }

    // public function profilesave()
    // {
    // return view('client_side.editprofile');
    // }
}
