@extends('main')
@section('content')
<br>
<br>
<section class="oder-check p-to-top">
    <div class="container">
        <img src="{{ asset('frondend/asset/image/xu-ly-don-hang-Shopee.jpg') }}" alt="" style="width:1000px">
        <div class="row-flex row-flex-product-detail">
                <p>Xác nhận đơn hàng: <span style="font-weight: bold;">#{{$id}}</span></p>
        </div>
        <div class="row-flex">
            <div class="oder-check-content">
                <p>Chúng tôi sẽ giao hàng đến khách hàng <span style="color: rgb(14, 151, 14);font-size: 17px;font-weight: bold;text-decoration: underline"> Tối đa 7 ngày</span></p>
                <p style="font-style: italic;font-size: 14px;">Vui lòng check email để theo dõi vận chuyển đơn hàng</p>
                <div class="oder-check-button">
                    <button ><a href="/cart">Tiếp tục mua hàng</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection