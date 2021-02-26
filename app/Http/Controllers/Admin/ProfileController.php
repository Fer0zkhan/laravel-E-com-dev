<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile', [
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => '',
            'product_active' => '',
            'admin_active' => 'active',
            'invoice_active' => ''
        ]);
    }

    public function update_admin(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', Rule::unique('users')->ignore($id)],
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'required|min:11',
            'city' => 'required|min:5'
        ]);
        $admin = User::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->phone = $request->phone;
        $admin->city = $request->city;
        $admin->status = 'active';

        $admin->save();

        return redirect()->route('admin_logout');
    }
}
