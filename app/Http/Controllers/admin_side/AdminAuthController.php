<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegistrationRequest;
use App\Models\User;
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

    public function registrationStore(RegistrationRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect(route('admin.login'));
    }

    public function forgetPassword()
    {
        return view('admin_side.auth.forget_password');
    }
}
