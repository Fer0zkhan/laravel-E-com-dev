<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function add_product(){
        return view('admin.addProduct', [
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => '',
            'product_active' => 'active',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }
    public function add_product_store(Request $request){

        $this->validate($request, [
            'product_name'=> 'required|max:255',
            'product_price'=> 'required|numeric|min:1',
            'product_sale_price' => 'sometimes|min:1',
            'product_catogery' => 'required',
            'product_sub_catogery'=> 'required',
            'product_discription'=> 'required|max:255',
            'product_img'=> 'required|image|mimes:jpg,jpeg,png,webp|max:5000'
        ]);

        $image_upload = $request->product_img;
        $image_name = time() . '.' . $image_upload->getClientOriginalExtension();
        $image_path = public_path('/images/');
        $image_upload->move($image_path, $image_name);

        Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_sale_price' => $request->product_sale_price,
            'product_catogery' => $request->product_catogery,
            'product_sub_catogery' => $request->product_sub_catogery,
            'product_discription' => $request->product_discription,
            'product_img' => '/images/' . $image_name,
            'product_action' => 'active'
        ]);

        return redirect()->route('admin_add_product')->with('status', 'Product Add Successfully!');
    }

    public function active_product(){
        $products = Product::get();
        return view('admin.activeProduct', [
            'products'=> $products,
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => '',
            'product_active' => 'active',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }
    public function deactive_product(){
        $products = Product::get();
        return view('admin.deactiveProduct', [
            'products'=> $products,
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => '',
            'product_active' => 'active',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }
}
