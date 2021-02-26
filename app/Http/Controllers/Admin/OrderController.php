<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function new_order(){
        $orders = Order::get();
        return view('admin.newOrder', [
            'orders' => $orders,
            'dashboard_active'=>'',
            'order_active' => 'active',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }

    public function new_order_pending($id){
        $order = Order::find($id);
        $order->status = "pending";
        $order->save();
        return redirect()->route('admin_new_order');
    }


    public function pending_order(){
        $orders = Order::get();
        return view('admin.pendingOrder', [
            'orders' => $orders,
            'dashboard_active'=>'',
            'order_active' => 'active',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }
    public function complete_order(){
        $orders = Order::get();
        return view('admin.completeOrder', [
            'orders' => $orders,
            'dashboard_active'=>'',
            'order_active' => 'active',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }

    public function complete_order_complete($id){
        $order = Order::find($id);
        $order->status = "complete";
        $order->save();
        return redirect()->route('admin_complete_order');
    }

    public function remove_order(){
        $orders = Order::get();
        return view('admin.removeOrder', [
            'orders' => $orders,
            'dashboard_active'=>'',
            'order_active' => 'active',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }
    public function admin_remove_order($id){
        $order = Order::find($id);
        $order->status = "remove";
        $order->save();
        return redirect()->route('admin_remove_order');
    }
}
