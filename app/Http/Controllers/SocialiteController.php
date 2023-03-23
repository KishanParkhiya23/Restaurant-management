<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $google_user = Socialite::driver('gooogle')->user();

            dd($google_user);
            $current_user = User::where('google_id', $google_user->getTd())->first();

            if (!$current_user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getTd()
                ]);

                Auth::login($new_user);

                return redirect(route('admin'));
            } else {
                Auth::login($current_user);
                return redirect(route('admin'));
            }
        } catch (\Throwable $th) {
            dd("Something went wrong ! " . $th->getMessage());
        }
    }
}
