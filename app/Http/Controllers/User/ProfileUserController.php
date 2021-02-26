<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileUserController extends Controller
{
    public function index() {
        return view('user.profile');
    }

    public function store(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', Rule::unique('users')->ignore($id)],
            'password' => 'required|string|confirmed|min:8',
            'phone' => 'required|min:11',
            'city' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->status = 'active';

        $user->save();

        return redirect()->route('user_logout');
    }
}
