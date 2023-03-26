<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request)
    {
        try {
            $google_user = Socialite::driver('google')->user();

            $current_user = User::where('google_id', $google_user->getId())->first();

            if (!$current_user) {
                $new_user = [
                    'firstname' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ];
                // $new_user = User::create([
                //     'firstname' => $google_user->getName(),
                //     'email' => $google_user->getEmail(),
                //     'google_id' => $google_user->getId()
                // ]);

                // Auth::login($new_user);
                session()->put('google_user', $new_user);

                return redirect(route('auth.get-password'));
            } else {
                Auth::login($current_user);
                return redirect(route('admin'));
            }
        } catch (\Throwable $th) {
            dd("Something went wrong ! " . $th->getMessage());
        }
    }

    public function getPasswordShow(Request $request)
    {
        return view('admin_side.auth.get-password');
    }

    public function savePasswordShow(Request $request)
    {
        if (session()->has('google_user')) {
            $request->validate(
                ['password' => 'required'],
                ['password.required' => 'Password must be fillable']
            );

            $data = session()->get('google_user');
            $data += ['password' => $request->password];
            $login = User::create($data);
            Auth::login($login);
            session()->pull('google_user');
            return redirect(route('admin'))->with(['success' => 'Log in succesfully.']);
        } else {
            return redirect(route('admin.login'));
        }
    }
}
