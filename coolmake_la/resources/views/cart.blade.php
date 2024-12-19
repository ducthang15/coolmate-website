@extends('main')
@section('content')
<br>
<br>
<section class="cart-section p-to-top">
   <form action="/cart/send" method="post">
    <div class="container">
        <div class="row-flex row-flex-product-detail">
            <p style="font-size: 30px;font-weight: bold">Giỏ hàng</p>
          
        </div>
        <div class="row-grid">
            <div class="cart-section-left">
                <h3 class="main-h3">Chi tiết đơn hàng</h3>
                <div class="cart-section-right-chitiet">
                    <table>
                        <thead>
                            <tr>
                                <th>Ảnh </th>
                                <th>Sản phẩm</th>
                                <th>thành tiền</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                             @php
                                $total = 0;
                             @endphp
                            @foreach ($products as $product)
                         
                            @php
                                $price = $product -> price_sale*Session::get('cart')[$product -> id];
                                $total += $price;
                            @endphp
                            <tr>
                               <td><img src="{{asset($product -> image)}}" alt="" style="width: 100px;"></td>
                           
                           <td>
                               <div class="hot-product-item" style="margin-left: 20px;">
                                       <p>{{$product -> name}}</p>
                                   <div class="hot-product-item-cost">
                                       <p>{{number_format($product -> price_nomal)}}<sup>vnđ</sup><span>{{number_format($product -> price_sale)}}<sup>vnđ</sup></span></p>
                                   </div>
                               </div>
                               <div class="product-detail-right-quantity" style="margin-left: 20px;">
                                       <h2>Số lượng</h2>
                                       <div class="product-detail-right-quantity-input">
                                           <i class="fa fa-minus"></i>
                                           <input onKeyDown="return false" class="quantity-input" type="number" name="product_id[{{$product -> id}}]" value="{{Session::get('cart')[$product -> id]}}">
                                           <i class="fa fa-plus"></i>
                                       </div>
                               </div>
                           </td>
                           <td >
                               <p>{{number_format($price)}}<sup>đ</sup></p>
                           </td>
                           <td><a href="/cart/delete/{{$product -> id}}"><i class="ri-delete-bin-fill" style="color: black; font-size: 20px; transition: color 0.4s;" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'"></i></a></td>
                           </tr>              
                            @endforeach
                                 <tr>
                                   <td colspan="2" style="font-weight: bold">Tổng tiền</td>
                                   <td style="text-align: center;color: red;font-weight:bold">{{number_format($total)}}</td>
                                   </tr>    
                        </tbody>
                    </table>
                    <button class="btn-main" formaction="/cart/update" style="background-color: black;color: white;width: 100px;height: 40px;margin-top: 20px;border: none;">Cập nhật giỏ hàng</button>
                        <a href="/" style="color: black;text-decoration: underline;font-style: italic;">>>Tiếp tục mua hàng</a>
                </div>
            </div>
            <div class="cart-section-right">
                <h2 class="main-h2">Thông tin giao hàng</h2>
                <span style="color: red">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors ->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </span>
                
                <div class="cart-section-right-input-phone">
                    <input type="text" placeholder="Tên" style="width: 400px;" name="name">
                    
                </div>
                <div class="cart-section-right-input-phone">
                    <input type="text" placeholder="Số điện thoại" style="width: 400px;" name="phone">
                </div>
                <div class="cart-section-right-input-email">
                    <input type="text" placeholder="Email" name="email" style="width: 400px;">
                </div>
                <div class="cart-section-right-select">
                    <select name="city" id="city" style="width: 100px;"><option value="">Tỉnh/tp</option></select>
                    <select name="district" id="district" style="width: 100px;"><option value="">Quận/huyện</option></select>
                    <select name="commune" id="ward" style="width: 100px;"><option value="">Khu/xã</option></select>
                </div>
                <div class="cart-section-right-input-adress" >
                    <input type="text" placeholder="Địa chỉ" style="width: 400px;" name="address">
                </div>
                <div class="cart-section-right-input-note">
                    <input type="text" placeholder="Ghi chú" style="width: 400px;height: 100px;" id=""  name="note">
                </div>
                <div class="cart-section-right-input-send">
                    <button>Gửi đơn hàng</button>
                </div>
                
            </div>    
        </div>
       </div>
       @csrf
   </form>
 </section>
@endsection
@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{ asset('frondend/asset/js/apiprovince.js') }}"></script>
<script src="{{ asset('frondend/asset/js/script.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

@endsection