<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoriesAddRequest;
use App\Http\Requests\Admin\StoriesEditRequest;
use App\Models\Story;
use Illuminate\Http\Request;

class StoriesManagementController extends Controller
{
    public function index()
    {
        $stories = Story::where('is_set', 1)->get();
        return view('admin_side.stories-management.stories', compact('stories'));
    }

    public function addShow(Request $request)
    {
        return view('admin_side.stories-management.addStory');
    }

    public function addSave(StoriesAddRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            // Save new image
            $image = $request->image;
            $imageName = 'client_side/images/' . time() . "-" . date("dmY") .  '.' . $image->extension();
            $image->move(public_path('client_side/images/'), $imageName);
            $data['image'] != null ? $data['image'] = $imageName : '';
        }

        if ($data) {
            Story::create($data);
        }
        return redirect(route('admin.stories-management'))->with(['success' => 'Story added succesfully']);
    }


    public function editShow(Request $request, $id)
    {
        $data = Story::find($id);

        return view('admin_side.stories-management.addStory', compact('data'));
    }

    public function editSave(StoriesEditRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            // Delete old profile image from our storage
            $delete_img = Story::whereId($request->id)->first();
            $delete_img = $delete_img['image'];
            // File::delete($delete_img);

            // Save new image
            $image = $request->image;
            $imageName = 'client_side/images/menu/' . time() . "-" . date("dmY") .  '.' . $image->extension();
            $image->move(public_path('client_side/images/menu/'), $imageName);
            $data['image'] != null ? $data['image'] = $imageName : '';
        }

        Story::whereId($request->id)->update($data);

        return redirect(route('admin.stories-management'))->with(['success' => 'Story updeted succesfully']);
    }


    public function deleteStory(Request $request)
    {
        Story::whereId($request->id)->update(['is_set' => 0]);

        return response()->json(['success' => true, 'message' => "Deleted succesfully"]);
    }
}
