<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ForgetPasswordController extends Controller
{
  public function forget_password()
  {
    return view('Client_side.forget_password');
  }

  public function pchange_password()
  {
    return view('client_side.pchangepassword');
  }

  public function pcheckpassword(Request $req)
  {
    $data = session()->get('loginData');

    if (Hash::check($req->password, $data->password)) {

      // dd(($data));
      $req->Session()->put('password_data', $data);
      return redirect(route('user.changepassword'));
    } else {
      return back()->with('error', 'Your old password is incorrect');
    }
  }
}
