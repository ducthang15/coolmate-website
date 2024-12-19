@extends('main')
@section('content')
<br>
<br>
<section class="product-detail p-to-top">
   <form action="/cart/add" method="post">
    <div class="container">
        <div class="row-flex row-flex-product-detail">
            <p >SẢN PHẨM</p>&nbsp;&nbsp;<i class="fa fa-long-arrow-right"></i><p>&nbsp;&nbsp;{{$product -> name}}</p>
        </div>
        <div class="row-grid">
            <div class="product-detail-left">
                <img class="imgbig" src="{{$product -> image }}" alt="">
                <div class="product-images-items">
                   @php
                       $product_images = explode('*',$product -> images);
                   @endphp
                   @foreach ($product_images as $product_image)
                       <img src="{{ asset($product_image) }}" alt="">
                   @endforeach
                    {{-- <img src="{{ asset('frondend/asset/image/438917941_450345580840755_4684341645262584770_n.jpg') }}" alt="">
                    <img src="{{ asset('frondend/asset/image/Ao_Poplin.33.png') }}" alt="">
                    <img src="{{ asset('frondend/asset/image/nau1.png') }}" alt=""> --}}
                </div>
            </div>
            <div class="product-detail-right">
                <div class="product-detail-right-inf">
                    <h1>{{$product -> name}}</h1>
                    <span>{{$product -> material}}</span>
                    <div class="hot-product-item-cost">
                        <p>{{$product -> price_nomal}}<sup>vnđ</sup> <span>{{$product -> price_sale}}<sup>vnđ</sup></span></p>
                        </div>
                </div>
                <br>
                <h3>Đặc điểm nổi bật</h3>
                <div class="product-detail-right-big">
                    {!!$product -> description!!}
                </div>
                <div class="product-detail-right-quantity">
                    <h2>Số lượng</h2>
                    <div class="product-detail-right-quantity-input">
                        <i class="fa fa-minus"></i>
                        <input onKeyDown="return false" class="quantity-input" name="product_qty" type="number" value="1">
                        <input type="hidden" name="product_id" value="{{$product -> id}}">
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="product-detail-right-button">
                  <button type="submit" class="main-btn">Thêm vào giỏ hàng</button>   
                </div>
            </div>
        </div>
        <br>
            <h2 >Chi tiết sản phẩm</h2>
            <div class="row-flex">
                <div class="product-detail-content">
                    <span>
                        {!!$product -> content!!}
                    </span> 
                </div>
            </div>
    </div>
    @csrf
   </form>
</section>

@endsection