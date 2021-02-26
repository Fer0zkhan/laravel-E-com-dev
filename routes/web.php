<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\AdminInvoiceController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\EditProductController;
use App\Http\Controllers\Admin\ProfileController;


use App\Http\Controllers\User\HomeUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\LogoutUserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//user
Route::get('/', [HomeUserController::class, 'index'])->name('user_home');

Route::group(['middleware' => ['guest']], function() {
    
    Route::get('/login', [LoginUserController::class, 'index'])->name('user_login');
    Route::post('/login', [LoginUserController::class, 'store']);
    Route::get('/register', [RegisterUserController::class, 'index'])->name('user_register');
    Route::post('/register', [RegisterUserController::class, 'store']);
});
Route::group(['middleware' => ['auth', 'role:user']], function() {
   
    // Route::get('/', [HomeUserController::class, 'index'])->name('user_home');
    Route::get('/store', [HomeUserController::class, 'mystore'])->name('user_mystore');
    Route::get('/store/catogery/{id}', [HomeUserController::class, 'product_catogery'])->name('product_catogery');
    Route::get('/detail/{id}', [HomeUserController::class, 'detail'])->name('user_pro_detail');
    Route::get('/cart', [HomeUserController::class, 'cart'])->name('user_cart');
    Route::get('/cart/{id}', [HomeUserController::class, 'store_cart'])->name('user_str_cart');
    Route::get('/cart/delete/{id}', [HomeUserController::class, 'remove_cart'])->name('user_remove_cart');
    
    Route::get('/checkout', [HomeUserController::class, 'checkout'])->name('user_checkout');
    Route::post('/checkout', [HomeUserController::class, 'checkout_store']);
    Route::get('/checkout/success', [HomeUserController::class, 'checkout_success'])->name('user_checkout_success');

    Route::get('/profile', [ProfileUserController::class, 'index'])->name('user_profile');
    Route::post('/profile/{id}', [ProfileUserController::class, 'store'])->name('edit_user');
    Route::get('/logout', [LogoutUserController::class, 'destroy'])->name('user_logout');
});

//admin
Route::group(['middleware' => ['guest']], function() {
    Route::get('/admin', function() {
        return redirect()->route('admin_login');
    });
    Route::get('/admin/login', [LoginController::class, 'index'])->name('admin_login');
    Route::post('/admin/login', [LoginController::class, 'store']);
});

Route::group(['middleware' => ['auth', 'role:admin']], function() {
    //admin dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin_dashboard');
    //admin register
    Route::get('/admin/register', [RegisterController::class, 'index'])->name('admin_register');
    Route::post('/admin/register', [RegisterController::class, 'store']);
    //admin order generater
    Route::get('/admin/invoice', [AdminInvoiceController::class, 'index'])->name('admin_invoice');
    Route::post('/admin/invoice/', [AdminInvoiceController::class, 'store'])->name('admin_gen_invoice');

    //admin user
    Route::get('/admin/user/active', [AdminUserController::class, 'active'])->name('admin_active_user');
    Route::get('/admin/user/deactive', [AdminUserController::class, 'deactive'])->name('admin_deactive_user');
    Route::get('/admin/user/active/{id}', [AdminUserController::class, 'user_active'])->name('admin_user_active_user');
    Route::get('/admin/user/deactive/{id}', [AdminUserController::class, 'user_deactive'])->name('admin_user_deactive_user');
    //admin order
    Route::get('/admin/order/new', [OrderController::class, 'new_order'])->name('admin_new_order');
    Route::get('/admin/order/new/{id}', [OrderController::class, 'new_order_pending'])->name('admin_new_order_pending');

    Route::get('/admin/order/pending', [OrderController::class, 'pending_order'])->name('admin_pending_order');
    Route::get('/admin/order/complete', [OrderController::class, 'complete_order'])->name('admin_complete_order');
    Route::get('/admin/order/complete/{id}', [OrderController::class, 'complete_order_complete'])->name('admin_new_order_complete');

    Route::get('/admin/order/remove', [OrderController::class, 'remove_order'])->name('admin_remove_order');
    Route::get('/admin/order/remove/{id}', [OrderController::class, 'admin_remove_order'])->name('admin_remove_order_remove');

    //admin product
    Route::get('/admin/product/add', [ProductController::class, 'add_product'])->name('admin_add_product');
    Route::post('/admin/product/add', [ProductController::class, 'add_product_store']);
    Route::get('/admin/product/active', [ProductController::class, 'active_product'])->name('admin_active_product');
    Route::get('/admin/product/deactive', [ProductController::class, 'deactive_product'])->name('admin_deactive_product');
    //admin edit product
    Route::get('/admin/product/edit/{id}', [EditProductController::class, 'index'])->name('admin_edit_product');
    Route::post('/admin/product/edit/{id}', [EditProductController::class, 'store']);
    Route::get('/admin/product/active/{id}', [EditProductController::class, 'active'])->name('admin_e_active_product');
    Route::get('/admin/product/deactive/{id}', [EditProductController::class, 'deactive'])->name('admin_e_deactive_product');

    //admin profile
    Route::get('/admin/profile', [ProfileController::class, 'index'])->name('admin_profile');
    Route::post('/admin/profile/update/{id}', [ProfileController::class, 'update_admin'])->name('update_admin');

    //admin logout
    Route::get('/admin/logout', [LogoutController::class, 'destroy'])->name('admin_logout');
});

// require __DIR__.'/auth.php';
