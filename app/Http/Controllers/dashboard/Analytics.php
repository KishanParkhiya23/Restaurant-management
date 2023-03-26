<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Models\Fuser;
use App\Models\Menu;
use App\Models\MenuCatagory;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class Analytics extends Controller
{
  public function index()
  {
    $foodCatagory = MenuCatagory::all();
    $totalMenus = Menu::where('is_set', 1)->get();
    $totalUser = Fuser::where('is_set', 1)->get();
    $totalChef = Chef::where('is_set', 1)->get();

    $totalOrder = OrderItem::count();

    $pending = OrderItem::whereStatus(0)->count();
    $processing = OrderItem::whereStatus(1)->count();
    $completed = OrderItem::whereStatus(2)->count();
    $canceled = OrderItem::whereStatus(3)->count();
    $delivery = 0;
    $takeaway = 0;
    $onTable = 0;

    foreach (OrderItem::all() as $order) {
      $type = get_order_type($order['order_id']);
      switch ($type) {
        case '1':
          $delivery += 1;
          break;
        case '2':
          $takeaway += 1;
          break;
        case '3':
          $onTable += 1;
          break;
      }
    }
    return view('content.dashboard.dashboards-analytics', compact('foodCatagory', 'totalMenus', 'totalChef', 'totalUser', 'totalOrder', 'pending', 'processing', 'completed', 'canceled', 'delivery', 'takeaway', 'onTable'));
  }

  public function getOrderPercentage(Request $request)
  {
    $totalOrder = OrderItem::count();
    $pendingPer = round(((OrderItem::whereStatus(0)->count()) * 100) / $totalOrder, 2);
    $processPer = round(((OrderItem::whereStatus(1)->count()) * 100) / $totalOrder, 2);
    $completedPer = round(((OrderItem::whereStatus(2)->count()) * 100) / $totalOrder, 2);
    $cancelPer = round(((OrderItem::whereStatus(3)->count()) * 100) / $totalOrder, 2);

    return response()->json(["success" => true, "pendingPer" => $pendingPer, "processPer" => $processPer, "completedPer" => $completedPer, "cancelPer" => $cancelPer]);
  }
}
