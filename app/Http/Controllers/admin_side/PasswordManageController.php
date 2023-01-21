<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use App\Mail\AdminForgetPasswordMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordManageController extends Controller
{
    public function showChangePassword()
    {
        return view('admin_side.auth.change-password');
    }

    public function saveChangePassword(ChangePasswordRequest $request)
    {
        $saveData = session()->get('password_data');
        $data = $request->validated();

        User::whereId($saveData['id'])->update(['password' => Hash::make($data['enter_password'])]);
        // distroy all session
        session()->pull('password_data');

        if (!empty(Auth::id())) {
            return redirect(route('admin.profile'));
        }else{
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();    
            return redirect(route('admin.login'))->with('success', 'Password Changed succefully');
        }
    }

    public function SendMail(Request $request)
    {
        $data = User::where('email', $request->email)->first();

        if (isset($data)) {
            $details = [
                'title' => 'Hello ' . $data['firstname'],
                'body' => 'There was a request to change your password ! If you did not make this request then please ignore this email.',
                'changeText' => 'Otherwise, please click this link to change your password.'
            ];
        } else {
            return back()->with('error', 'Your email is not matched with our data.Please check your email');
        }
        $request->Session()->put('password_data', $data);
        
        Mail::to($request->email)->send(new AdminForgetPasswordMail($details));
        return back()->with('success', 'Mail sent succesfully, Please check your mailbox');
    }
}
