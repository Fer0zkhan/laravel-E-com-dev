<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();
        if(auth()->user()->hasRole('admin') == 'true'){
            $request->session()->regenerate();
            return redirect()->route('admin_dashboard');
        }

        return redirect()->route('user_logout');
    }
}
