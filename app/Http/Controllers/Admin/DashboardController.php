<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index() {
        $products = Product::get();
        $users = User::get();
        $orders = Order::get();
        return view('admin.dashboard', [
            'dashboard_active'=>'active',
            'order_active' => '',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => '',
            'products' => $products,
            'users' => $users,
            'orders' => $orders
        ]);
    }
}
