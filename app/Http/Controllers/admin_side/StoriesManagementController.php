<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoriesManagementController extends Controller
{
    public function index()
    {
        $stories = Story::where('is_set',1)->get();
        return view('admin_side.stories-management.stories', compact('stories'));
    }

    public function addShow(Request $request)
    {
        return view('admin_side.stories-management.addStory');
    }

}
