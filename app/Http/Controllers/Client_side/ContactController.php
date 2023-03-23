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

        // Contact::create($data);
        // dd($data);
        return back()->with('success', 'Your response sent succesfully');
    }
}
