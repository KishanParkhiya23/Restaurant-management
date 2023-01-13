<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileSaveRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        $data = Auth::user();
        return view('admin_side.profile',compact('data'));
    }

    public function profileSave(ProfileSaveRequest $request)
    {
        $data = $request->validated();
        if(isset($data['profile_img'])){
            $image = $request->profile_img;
            $imageName = 'images/' . time() . '.' . $image->extension();
            $image->move(public_path('storage/images'), $imageName);
            $data['profile_img'] != null ? $data['profile_img'] = $imageName : '';

            
        }
        User::where('email','=', $data['email'])->update($data);
        return "saved";
    }
}
