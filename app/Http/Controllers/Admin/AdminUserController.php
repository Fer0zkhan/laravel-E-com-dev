<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    public function active() {
        $users = User::get();
        return view('admin.activeUser', [
            'users' => $users,
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => 'active',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }

    public function deactive() {
        $users = User::get();
        return view('admin.deactiveUser', [
            'users' => $users,
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => 'active',
            'product_active' => '',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }

    public function user_active($id){
        $user = User::find($id);
        $user->status = 'active';
        $user->save();
        return redirect()->route('admin_active_user');
    }

    public function user_deactive($id){
        $user = User::find($id);
        $user->status = 'deactive';
        $user->save();
        return redirect()->route('admin_deactive_user');
    }
}
