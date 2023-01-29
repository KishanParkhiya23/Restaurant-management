<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuCatagory;
use Illuminate\Http\Request;

class Analytics extends Controller
{
  public function index()
  {
    $foodCatagory = MenuCatagory::all();
    // $menu = Menu::where('is_set',1)->get();
    return view('content.dashboard.dashboards-analytics', compact('foodCatagory'));
  }
}
