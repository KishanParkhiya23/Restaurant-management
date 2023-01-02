<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        $data = Auth::user();
        return view('admin_side.profile',compact('data'));
    }
}
