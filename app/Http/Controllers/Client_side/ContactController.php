<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('Client_side.contact');
    }

    public function contactSave(ContactRequest $request)
    {
        $data = $request->validated();
        if (session()->has('Ulogin')) {
            $data += ["user_id" => session()->get('Ulogin')];
        }

        Contact::create($data);
        return back()->with('success', 'Your response sent succesfully');
    }
}
