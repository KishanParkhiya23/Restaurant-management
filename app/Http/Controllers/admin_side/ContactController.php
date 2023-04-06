<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactShow()
    {
        $data  = Contact::orderBy('id', 'DESC')->cursorPaginate(12);

        return view('admin_side.contact-details.contact', compact('data'));
    }

    public function getContactData(Request $request)
    {
        $data = Contact::find($request->id);
        return response()->json(['success'=>true,'data'=>$data]);
    }
}
