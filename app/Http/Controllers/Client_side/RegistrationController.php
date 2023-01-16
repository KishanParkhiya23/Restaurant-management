<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Fuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Client\RegistrationRequest;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('Client_side.registration');
    }

    public function regdatasave(RegistrationRequest $req)
    {
        $data = $req->validated();

        $data['password'] =  Hash::make($data['password']);

        Fuser::create($data);
        return redirect(route('user.login'));

        // dd($data);
        // dd($data['password']);

    }
}
