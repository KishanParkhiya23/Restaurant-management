<?php

namespace App\Http\Controllers\Client_side;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order($id)
    {
        $item = Menu::find($id);
        return view('client_side.order',compact('item'));
    }

    public function addtocart()
    {
    return view('client_side.addtocart');
    }

    public function yourorder()
    {
    return view('client_side.yourorder');
    }
    public function vieworder()
    {
    return view('client_side.vieworder');
    }

}
