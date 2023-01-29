<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditChefRequest;
use App\Models\Chef;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{
    public function index()
    {
        $chefs = Chef::where('is_set',1)->get();
        return view('admin_side.chef-dashboard', compact('chefs'));
    }

    public function showAddChef()
    {
        return view('admin_side.edit-chef');
    }

    public function saveAddChef(EditChefRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            // Save new image
            $image = $request->image;
            $imageName = 'client_side/images/' . time() . "-" . date("dmY") .  '.' . $image->extension();
            $image->move(public_path('client_side/images'), $imageName);
            $data['image'] != null ? $data['image'] = $imageName : '';
        };
        Chef::create($data);
        return redirect(route('admin.chef.dashboard'))->with("success","Record added succefully");
 
    }
    public function edit($id)
    {
        $data = Chef::find($id);
        return view('admin_side.edit-chef', compact('data'));
    }

    public function editSave(EditChefRequest $request, $id)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            
            // Delete old profile image from our storage
            $delete_img = Chef::whereId($id)->first();
            $delete_img = $delete_img['image'];
            File::delete($delete_img);

            // Save new image
            $image = $request->image;
            $imageName = 'client_side/images/' . time() . "-" . date("dmY") .  '.' . $image->extension();
            $image->move(public_path('client_side/images'), $imageName);
            $data['image'] != null ? $data['image'] = $imageName : '';
        }

        Chef::whereId($id)->update($data);
        return redirect(route('admin.chef.dashboard'))->with("success","Record updated succefully");
    }

    public function deleteChef($id){
        Chef::whereId($id)->update(['is_set' => 0]);

        return response()->json(['success' => true]);

    }
}
