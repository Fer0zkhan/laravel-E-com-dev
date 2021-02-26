<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
class AdminInvoiceController extends Controller
{
    public function index(){
        return view('admin.generateInvoice', [
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => 'active'
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'order_id' => 'required|numeric'
        ]);
        $order = Order::find($request->order_id);
        
        
        if($order){
            $arr = array();
        foreach ($order->product_id as $value) {
            $arr[] = $value['product_id'];
        }
            $products = Product::get();
            $users = User::get();
            return view('admin.invoice', [
                'users' => $users,
                'products' => $products,
                'arr' => $arr,
                'orders' => $order,
                'dashboard_active'=>'',
                'order_active' => '',
                'user_active' => '',
                'product_active' => '',
                'admin_active' => '',
                'invoice_active' => 'active'
            ]);
        }
        return redirect()->route('admin_invoice')->with('status', 'Not Found!');
    }
}
