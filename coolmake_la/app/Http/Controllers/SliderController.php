<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider; // Giả sử bạn có model Slider


class SliderController extends Controller
{ // Hiển thị form thêm slider
    public function create()
    {
        return view('admin.slider.create');
    }

    // Lưu slider vào database
    public function store(Request $request)
    {
        // Xác thực dữ liệu form
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Lưu ảnh vào thư mục storage
        $imagePath = $request->file('image')->store('sliders', 'public');
    
        // Lưu đường dẫn ảnh vào database
        Slider::create([
            'image' => $imagePath,
        ]);
    
        // Chuyển hướng về trang chủ admin
        return redirect('/admin');  // Chuyển hướng trực tiếp đến trang chủ admin
    }
    
}
