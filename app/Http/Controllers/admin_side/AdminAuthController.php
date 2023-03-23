<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Requests\Admin\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login()
    {
        session()->pull('password_data');
        return view('admin_side.auth.login');
    }

    public function loginCheck(LoginRequest $request)
    {
        $data = $request->validated();
        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            $admin = Auth::user();

            if ($admin['role'] != 2) {
                return redirect(route('admin'))->with("success", "You logged in succesfully");
            } else {
                return redirect(route('admin.chef-management.dashboard'))->with("success", "You logged in succesfully");
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function registration()
    {
        return view('admin_side.auth.registration');
    }

    public function registrationStore(RegistrationRequest $request)
    {
        $data = $request->validated();
        $data = $data + ["role" => 1];
        if (isset($data['profile_img'])) {
            $image = $request->profile_img;
            $imageName = 'images/' . time() . "-" . date("dmY") .  '.' . $image->extension();
            $image->move(public_path('storage/images'), $imageName);

            // $image = $request->profile_img->store('images', ["disk" => "public"]);

            $data['profile_img'] != null ? $data['profile_img'] = $imageName : '';
        }

        User::create($data);
        return redirect(route('admin.login'));
    }

    public function forgetPassword()
    {
        return view('admin_side.auth.forget_password');
    }
}
