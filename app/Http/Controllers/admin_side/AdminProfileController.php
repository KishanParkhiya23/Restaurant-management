<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileSaveRequest;
use App\Models\User;
// use Faker\Core\File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

            // Delete old profile image from our storage
            $delete_img = User::where('email','=', $data['email'])->first();
            $delete_img = $delete_img['profile_img'];
            File::delete('storage/'.$delete_img);

            // Save new image
            $image = $request->profile_img;
            $imageName = 'images/' . time() . '.' . $image->extension();
            $image->move(public_path('storage/images'), $imageName);
            $data['profile_img'] != null ? $data['profile_img'] = $imageName : '';
        }
        User::where('email','=', $data['email'])->update($data);
        return back()->with("success" , "Profile updated succesfully");
    }
}
