<?php

namespace App\Http\Controllers\admin_side;

use App\Http\Controllers\Controller;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class ChefAdminController extends Controller
{
    public function index()
    {
        $pending = OrderItem::whereStatus(0)->get();
        $process = OrderItem::whereStatus(1)->get();
        $completed = OrderItem::whereStatus(2)->get();
        return view('admin_side.chef-management.dashboard', compact('pending', 'process', 'completed'));
    }

    public function pendingShow()
    {
        $data = OrderItem::whereStatus(0)->cursorPaginate(8);
        return view('admin_side.chef-management.pending', compact('data'));
    }

    public function processingShow()
    {
        $data = OrderItem::whereStatus(1)->cursorPaginate(8);
        return view('admin_side.chef-management.processing', compact('data'));
    }

    public function completedShow()
    {
        $data = OrderItem::whereStatus(2)->cursorPaginate(10);
        return view('admin_side.chef-management.completed', compact('data'));
    }

    public function acceptOrder($id)
    {
        OrderItem::whereId($id)->update(['status' => 1]);
        return redirect(route('admin.chef-management.pending.show'))->with('success', 'Order accepted');
    }

    public function completeOrder($id)
    {
        OrderItem::whereId($id)->update(['status' => 2]);
        return redirect(route('admin.chef-management.processing.show'))->with('success', 'Order completed');
    }
}
