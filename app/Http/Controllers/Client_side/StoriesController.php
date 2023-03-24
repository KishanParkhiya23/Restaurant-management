<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function stories()
    {
        $stories = Story::where('is_set',1)->get();
        return view('Client_side.stories', compact('stories'));
    }

    public function getModelData(Request $request)
    {
        $data = Story::whereId($request->id)->first();
        return response()->json(['success' => true, 'data' => $data]);
    }
}
