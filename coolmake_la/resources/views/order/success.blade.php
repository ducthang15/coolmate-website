@extends('main')
@section('content')
<section class="oder-check p-to-top">
    <div class="container">
        <div class="row-flex row-flex-product-detail">
                <p>Xác nhận đơn hàng: <span style="font-weight: bold;">{{$id}}</span></p>
        </div>
        <div class="row-flex">
            <div class="oder-check-content">
                <p>Đơn hàng của bạn đã được gửi <span style="color: green;font-size: 18px;font-weight: bold;"> #Thành công!</span></p>
                <p style="font-style: italic;font-size: 14px;">Vui lòng check email để kiểm tra đơn hàng</p>
                <div class="oder-check-button">
                    <a href="http://127.0.0.1:5500/index.html"><button>Tiếp tục mua hàng</button></a>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection