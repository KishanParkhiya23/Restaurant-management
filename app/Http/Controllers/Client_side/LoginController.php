<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Client\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function login()
  {
    return view('Client_side.login');
  }

  public function logincheck(LoginRequest $req)
  {
    // $data = $req->validated();
    $CheckLogin = DB::table('fusers')->whereEmail($req->email)->get()->first();

    if ($CheckLogin) {
      if (Hash::check($req->password, $CheckLogin->password)) {
        $req->Session()->put('Ulogin', $CheckLogin->id);
        return redirect(route('home'));
      } else {
        return back()->with('password', 'Password is not matched');
      }
    } else {
      return back()->with('Email', 'Email is not matched');
    }
  }

  public function Ulogout()
  {
      if (Session()->has('Ulogin')) {
          Session()->pull('Ulogin');
          return redirect(route('home'));
      } else {
          return "Please login account!!";
      }
  }

}
