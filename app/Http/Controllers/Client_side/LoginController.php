<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Client\ChangePasswordRequest;
use App\Http\Requests\Client\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Fuser;

class LoginController extends Controller
{
  public function login()
  {
    if (session()->has('password_data')) {
      session()->pull('password_data');
    }
    return view('Client_side.login');
  }

  public function logincheck(LoginRequest $req)
  {
    $CheckLogin = DB::table('fusers')->whereEmail($req->email)->where('is_set', 1)->get()->first();

    if ($CheckLogin) {
      if (Hash::check($req->password, $CheckLogin->password)) {
        $req->Session()->put('Ulogin', $CheckLogin->id);
        $req->Session()->put('loginData', $CheckLogin);
        return redirect(route('home'));
      } else {
        return back()->with('error', 'Password is not matched');
      }
    } else {
      return back()->with('error', 'Email is not matched');
    }
  }

  public function Ulogout()
  {
    if (Session()->has('Ulogin')) {
      Session()->pull('Ulogin');
      Session()->pull('loginData');
      return redirect(route('home'));
    } else {
      return "Please login account!!";
    }
  }

  public function changepassword()
  {
    return view('client_side.change-password');
  }

  public function Usavechangepassword(ChangePasswordRequest $req)
  {
    $data = $req->validated();
    $userData = session()->get('loginData');
    if ($data) {
      Fuser::whereId($userData->id)->update(['password' => hash::make($data['enter_password'])]);
      session()->pull('passworddata');
      return redirect(route('home'))->with('success', 'Password change succesfully');
    }
  }

  public function changeName(Request $request)
  {
    $user = session()->get('Ulogin');
    Fuser::whereId($user)->update(['fullname' => $request->name]);
    $userData = Fuser::find($user);
    session()->put('loginData', $userData);
    return response()->json(['success' => true]);
  }
}
