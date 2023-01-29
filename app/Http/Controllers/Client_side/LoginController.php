<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Client\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Client_side.login');
    }

    public function logincheck(LoginRequest $req)
    {        
        $data = $req->validated();
        
        return redirect(route('home'));
    }
}
