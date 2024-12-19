<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function insert_product(Request $request)
    {
       
        $product = new Product();
        $product->name = $request->input('name');
        $product->material = $request->input('material');
        $product->price_nomal = $request->input('price_nomal');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->content = $request->input('content');
        $product->image = $request->input('image');

        // Kiểm tra 'images' có phải là mảng trước khi dùng implode
        $images = $request->input('images');

        if (is_array($images)) {
            $product_images = implode('*', $images);
        } else {
            $product_images = $images; // Gán trực tiếp nếu không phải mảng
        }

        $product->images = $product_images;

        $product->save();

        return redirect()->back();
    }

//tạo các hàm với router


    public function add_product()
    {
        return view('admin.product.add', [
            'title' => 'Thêm sản phẩm'
        ]);
    }

    public function list_product()
    {   
        $product = DB::table('products')->paginate(5);//lấy dữ liệu và hiện số sản phẩm trên mỗi trang 
        return view('admin.product.list', [
            'title' => 'Danh sách sản phẩm',
            'products'=> $product
        ]);
    }
    public function delete_product(Request $request){
        product::find($request -> product_id)->delete();// xoá sản phẩm theo hàng ngang
        return response() -> json(['success' =>true]);
        
    }
    public function edit_product(Request $request){
       $product = product::find($request -> id);
        return view('admin.product.edit',[
            'title' => 'Sửa sản phẩm',
            'product' => $product
        ]);
    }
    public function update_product(Request $request){
        $product= product::find($request ->id);
        $product->name = $request->input('name');
        $product->material = $request->input('material');
        $product->price_nomal = $request->input('price_nomal');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->content = $request->input('content');
        $product->image = $request->input('image');
        $images = $request->input('images');

        if (is_array($images)) {
            $product_images = implode('*', $images);
        } else {
            $product_images = $images; // Gán trực tiếp nếu không phải mảng
        }

        $product->images = $product_images;
        $product->save();
        return redirect('/admin/product/list');

    }
}
