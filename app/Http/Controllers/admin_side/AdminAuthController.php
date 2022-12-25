<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin_side.auth.login');
    }

    public function registration()
    {
        return view('admin_side.auth.registration');
    }

    public function forgetPassword()
    {
        return view('admin_side.forget_password');
    }
}
