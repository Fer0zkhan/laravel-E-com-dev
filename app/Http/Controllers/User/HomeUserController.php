<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeUserController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('user.home', [
            'products' => $products
        ]);
    }
    public function index_gest() {
        
        return view('user.home');
    }
    public function detail($id) {
        $products = Product::find($id);
       
        return view('user.detail', [
            'products' => $products
            ]);
    }

    public function mystore() {
        
        $products = Product::get();
        return view('user.mystore', [
            'products' => $products
        ]);
    }

    public function product_catogery($id){
        if($id == 'all') {
            $products = Product::get();
            return redirect()->route('user_mystore', [
            'products' => $products
            ]);
        }
        if($id == 'Mens') {
            $products = Product::where('product_catogery', $id)->get();
            // dd($products == null);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
        if($id == 'Womens') {
            $products = Product::where('product_catogery', $id)->get();
            // dd($products);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
        if($id == 'Children') {
            $products = Product::where('product_catogery', $id)->get();
            // dd($products);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
        if($id == 'Shirt') {
            $products = Product::where('product_sub_catogery', $id)->get();
            // dd($products);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
        if($id == 'tshirt') {
            $products = Product::where('product_sub_catogery', $id)->get();
            // dd($products);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
        if($id == 'Pant') {
            $products = Product::where('product_sub_catogery', $id)->get();
            // dd($products);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
        if($id == 'Jacket') {
            $products = Product::where('product_sub_catogery', $id)->get();
            // dd($products);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
        if($id == 'Watch') {
            $products = Product::where('product_sub_catogery', $id)->get();
            // dd($products);
            return view('user.mystore', [
            'products' => $products
            ]);
        }
    }

    public function cart() {
       
        $carts = Cart::get();
        return view('user.cart', [
            'carts' => $carts
        ]);
    }

    public function store_cart($id) {
        
        $products = Product::find($id);
        $carts = Cart::create([
            'product_id' => $products->id,
            'product_name' => $products->product_name,
            'product_price' => $products->product_price,
            'product_img' => $products->product_img
        ]);
        $products->save();
        return redirect()->route('user_mystore')->with('status', 'View Your Cart');
    }

    public function remove_cart($id) {
        
        Cart::where('id', $id)->delete();
        return redirect()->route('user_cart');
    
    }

    public function checkout() {
        $carts = Cart::get();
        $products = Product::get();
        return view('user.checkout', [
            'carts' => $carts,
            'products' => $products
        ]);
    }

    public function checkout_store(Request $request) {
        $carts = Cart::get();
        
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required|max:255',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required|numeric'
        ]);

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => $carts,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'state' => $request->state,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'status' => 'new'
        ]);

        Cart::truncate();

        return redirect()->route('user_checkout_success');
    }

    public function checkout_success() {
        return view('user.success_checkout');
    }
}
