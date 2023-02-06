<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AddFoodRequest;
use App\Http\Requests\Admin\EditFoodRequest;
use App\Models\Menu;
use App\Models\MenuCatagory;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function breakfastShow()
    {
        $data = Menu::where('type', 1)->where('is_set',1)->get();
        return view('admin_side.menu.breakfast', compact('data'));
    }

    public function lunchShow()
    {
        $data = Menu::where('type', 2)->where('is_set',1)->get();
        return view('admin_side.menu.lunch', compact('data'));
    }

    public function dinnerShow()
    {
        $data = Menu::where('type', 3)->where('is_set',1)->get();
        return view('admin_side.menu.dinner', compact('data'));
    }

    public function drinksShow()
    {
        $data = Menu::where('type', 4)->where('is_set',1)->get();
        return view('admin_side.menu.drinks', compact('data'));
    }

    public function dessertsShow()
    {
        $data = Menu::where('type', 5)->where('is_set',1)->get();
        return view('admin_side.menu.desserts', compact('data'));
    }

    public function wineShow()
    {
        $data = Menu::where('type', 6)->where('is_set',1)->get();
        return view('admin_side.menu.wine', compact('data'));
    }

    public function addFoodShow($type)
    {
        $foodType = MenuCatagory::find($type);
        $foodType = $foodType['catagory'];
        return view('admin_side.menu.edit-food', compact('foodType'));
    }

    public function addFoodSave(AddFoodRequest $request, $type)
    {
        $data = $request->validated();
        $catagory = MenuCatagory::whereCatagory($type)->first();
        $data['type'] = $catagory['id'];

        if (isset($data['image'])) {
            // Save new image
            $image = $request->image;
            $imageName = 'client_side/images/menu/' . time() . "-" . date("dmY") .  '.' . $image->extension();
            $image->move(public_path('client_side/images/menu/'), $imageName);
            $data['image'] != null ? $data['image'] = $imageName : '';
        }
        Menu::create($data);
        return redirect(route('admin.menu.' . $type . '.show'));
    }

    public function deleteFood($id)
    {
        Menu::whereId($id)->update(['is_set' => 0]);
        return response()->json(['success' => true,'message'=> "Deleted succesfully"]);
    }

    public function editFoodShow($id)
    {
        $data = Menu::whereId($id)->first();
        return view('admin_side.menu.edit-food', compact('data'));
    }

    public function editFoodSave(EditFoodRequest $request, $id)
    {
        $data = $request->validated();
        $item = Menu::find($id);
        $urlData = MenuCatagory::find($item['type']);

        if (isset($data['image'])) {
            // Delete old profile image from our storage
            $delete_img = Menu::whereId($id)->first();
            $delete_img = $delete_img['image'];
            // File::delete($delete_img);

            // Save new image
            $image = $request->image;
            $imageName = 'client_side/images/menu/' . time() . "-" . date("dmY") .  '.' . $image->extension();
            $image->move(public_path('client_side/images/menu/'), $imageName);
            $data['image'] != null ? $data['image'] = $imageName : '';
        }

        Menu::whereId($id)->update($data);

        return redirect(route('admin.menu.' . $urlData['catagory'] . '.show'));
    }
}
