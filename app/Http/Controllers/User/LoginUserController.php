<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function index(){
        return view('user.login');
    }

    public function store(LoginRequest $request)
    {
        $request->authenticate();
        
        if(auth()->user()->status == 'deactive'){
            return redirect()->route('user_logout')->with('status', 'You are deactive by admin! kindly contact us for further details!');
        }
        if(auth()->user()->hasRole('user') == 'true'){
            $request->session()->regenerate();
            return redirect()->route('user_home');
        }
        return redirect()->route('admin_logout')->with('status', 'You Are Not a User!');
    }
}
