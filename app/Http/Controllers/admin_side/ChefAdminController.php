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
        $cancel = OrderItem::whereStatus(3)->get();


        $totalOrder = OrderItem::count();

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

        return view('admin_side.chef-management.dashboard', compact('pending', 'process', 'completed', 'cancel', 'totalOrder', 'delivery', 'takeaway', 'onTable'));
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

    public function cancelShow()
    {
        $data = OrderItem::whereStatus(3)->cursorPaginate(10);
        return view('admin_side.chef-management.cancel', compact('data'));
    }

    public function acceptOrder($id)
    {
        OrderItem::whereId($id)->update(['status' => 1]);
        return redirect(route('admin.chef-management.pending.show'))->with('success', 'Order accepted');
    }

    public function cancelOrder($id)
    {
        OrderItem::whereId($id)->update(['status' => 3]);
        return redirect(route('admin.chef-management.pending.show'))->with('success', 'Order canceled');
    }

    public function completeOrder($id)
    {
        OrderItem::whereId($id)->update(['status' => 2]);
        return redirect(route('admin.chef-management.processing.show'))->with('success', 'Order completed');
    }
}
