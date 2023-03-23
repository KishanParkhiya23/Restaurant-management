<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Models\Fuser;
use App\Models\User;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    public function getAdminDetails(Request $request)
    {
        $data = User::cursorPaginate(10);
        return view('admin_side.user-details.admin', compact('data'));
    }

    public function getUserDetails(Request $request)
    {
        $data = Fuser::where('is_set', 1)->cursorPaginate(10);
        return view('admin_side.user-details.user', compact('data'));
    }

    public function changeRole(Request $request)
    {
        User::whereId($request->id)->update(['role' => $request->role]);
        return response()->json(['success' => true, 'message' => "Change role succesfully"]);
    }

    public function deleteUser(Request $request)
    {
        if ($request->type == 1) {
            //Admin data
            User::where('id', $request->id)->delete();
        } else {
            //User data
            Fuser::whereId($request->id)->update(['is_set' => 0]);
        }

        return response()->json(['success' => true, 'message' => "Change role succesfully"]);
    }
}
