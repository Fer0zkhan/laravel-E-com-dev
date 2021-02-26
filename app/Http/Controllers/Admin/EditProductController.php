<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class EditProductController extends Controller
{
    public function index($id){
        $products = Product::find($id);
        return view('admin.editProduct', [
            'products'=> $products,
            'dashboard_active'=>'',
            'order_active' => '',
            'user_active' => '',
            'product_active' => 'active',
            'admin_active' => '',
            'invoice_active' => ''
        ]);
    }

    public function store(Request $request, $id){
        $this->validate($request, [
            'product_name' => 'required|max:255',
            'product_price' => 'required|numeric|min:1',
            'product_sale_price' => 'sometimes|min:1',
            'product_catogery' => 'required',
            'product_sub_catogery' => 'required',
            'product_discription' => 'required|max:255',
            'product_img' => 'required|image|mimes:jpg,jpeg,png|max:5000'
        ]);
        $image_upload = $request->product_img;
        $image_name = time() . '.' . $image_upload->getClientOriginalExtension();
        $image_path = public_path('/images/');
        $image_upload->move($image_path, $image_name);

        $products = Product::find($id);
        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_sale_price = $request->product_sale_price;
        $products->product_catogery = $request->product_catogery;
        $products->product_sub_catogery = $request->product_sub_catogery;
        $products->product_discription = $request->product_discription;
        $products->product_img = '/images/' . $image_name;
        $products->product_action = 'active';
        $products->save();
        return redirect()->route('admin_edit_product', ['id'=>$products->id])->with('status', 'Update Product Successfully!');
    }

    public function active($id) {
        $products = Product::find($id);
        $products->product_action = 'active';

        $products->save();
        return redirect()->route('admin_deactive_product');
        // dd($products);
    }

    public function deactive($id) {
        $products = Product::find($id);
        $products->product_action = 'deactive';

        $products->save();
        return redirect()->route('admin_active_product');
        // dd($id);
    }
}
