<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('Client_side.registration');
    }
}
