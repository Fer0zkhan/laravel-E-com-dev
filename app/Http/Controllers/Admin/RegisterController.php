<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register', [
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => 'active',
            'invoice_active' => ''
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'required|min:11',
            'city' => 'required|min:5'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'city' => $request->city,
            'status' => 'active'
        ]);
        $user->attachRole('admin');

        event(new Registered($user));

        return redirect()->route('admin_register')->with('status', 'New Admin Successfully Register!');
    }
}
