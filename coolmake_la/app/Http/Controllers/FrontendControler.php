<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdertRequest;
use App\Mail\TestMail;
use App\Models\order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Notifications\EmailNotification;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SlackNotification; 
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

use App\Models\Slider;
use Illuminate\Support\Facades\Auth;



class FrontendControler extends Controller
{
    public function index(){
        $products = Product::all();
        return view('home', [
            'products' => $products
        ]);        
    }
    // show chi tiết sản phẩm
    public function show_product(Request $request){
        $product = product::find($request -> id);
        return view('product',[
            'product'=> $product
        ]);
    }
    // thêm sản phẩm vào giỏ hàng 
    public function add_cart(Request $request) {
        $product_id = $request-> product_id;
        $product_qty = $request-> product_qty;
    
        if (is_null(Session::get('cart'))) {
            // Nếu giỏ hàng chưa tồn tại trong phiên, khởi tạo mới với sản phẩm đầu tiên
            Session::put('cart', [
                $product_id => $product_qty
            ]);
            return redirect('/cart');
        } else {
            // Lấy giỏ hàng từ phiên
            $cart = Session::get('cart');
            if (Arr::exists($cart, $product_id)) {
                // Nếu sản phẩm đã có trong giỏ, cập nhật số lượng
                $cart[$product_id] = $cart[$product_id] + $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');
            } else {
                // Nếu sản phẩm chưa có trong giỏ, thêm mới
                $cart[$product_id] = $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');
            }
        }

    }
    public function show_cart() {
        $cart = Session::get('cart');
        $product_id = array_keys($cart);
        $products = product::whereIn('id',$product_id)->get();

        return view('cart',[
            'products'=> $products
        ]);
    }
    public function delete_cart(Request $request){
        $cart = Session::get('cart');
        $product_id = $request -> id;
        unset($cart[$product_id]);
        session::put('cart',$cart);
        return redirect('/cart');
    }
    public function update_cart(Request $request){
        $cart = $request -> product_id;
        session::put('cart',$cart);
        return redirect('/cart');

    }
    public function send_cart(OrdertRequest $request){
        $token = Str::random(12);
        $order = new order;
        $order -> name = $request ->input('name');
        $order -> phone = $request ->input('phone');
        $order -> email = $request ->input('email');
        $order -> city = $request ->input('city');
        $order -> district = $request ->input('district');
        $order -> commune = $request->input('commune');
        $order -> address = $request->input('address');
        $order -> note = $request->input('note');
        $order_detail = json_encode($request -> input('product_id'));
        $order -> order_detail = $order_detail;
        $order -> token = $token;
        $order -> save();
        $mailifor = $order -> email;
        $nameifor = $order -> name;
        $Mail = Mail::to($mailifor)->send(new TestMail($nameifor));
    //  Notification::send($order,new SlackNotification($order));
        Notification::send($order, new EmailNotification($order));
        return redirect()->route('order.confirm', ['id' => $order -> id]);
    }


    public function show_login()
    {
        return view('admin.login'); // Đảm bảo file view 'admin/login.blade.php' tồn tại
    }

    public function ckeck_login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            return redirect('admin');
        }

        return redirect()->back()->with('error', 'Email hoặc mật khẩu không đúng.');
    }


    public function showSliders() {
        $sliders = Slider::all();
        return view('frontend.slider', compact('sliders'));
    }
}
