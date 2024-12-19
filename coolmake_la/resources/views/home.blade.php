<!DOCTYPE html>
<html lang="en">
<head>
    @include('parts.head')
</head>
<body>
<!-------header------>
@include('parts.header')

<section class="slide">
        <div class="slide-items">
            <div class="slide-item">
                <img src="{{ asset('frondend/asset/image/6.png') }}" alt="backgroud">
            </div>
            <div class="slide-item">
                <img src="{{ asset('frondend/asset/image/2.png') }}" alt="backgroud">
            </div>
            <div class="slide-item">
                <img src="{{ asset('frondend/asset/image/3.png') }}" alt="backgroud">
            </div>
        </div>
        <div class="slide-arrow">
            <i class="fa fa-arrow-right" style="color: red;"></i>
            <i class="fa fa-arrow-left" style="color: red;" ></i>
        </div>
</section>
<!------san pham hot-------->
<section class="hot-product">
    <div class="container">
        <div class="row-grid">
            <p class="heading-text"> Sản phẩm phổ biến</p>
        </div>
        <div class="row-grid row-grid-hot-product">
          @foreach ( $products as $product )
          <div class="hot-product-item">
           <a href="/product/{{$product -> id}}"> <img src="{{ asset($product -> image) }}" alt=""></a>
              <p style="font-size: 20px"><a href="/product/{{$product -> id}}">{{$product -> name}}</a></p>
                  <span style="margin-left:170px">{{$product -> material}}</span>
            <div
                class="hot-product-item-cost">
                    <p style="font-size: 15px;font-weight: 300">{{number_format($product -> price_nomal)}}<sup>vnđ</sup> <span>{{ number_format($product -> price_sale)}}<sup>vnđ</sup></span></p>
            </div>
        </div>
          @endforeach
        </div>
    </div>
    <br>
    {{-- <div class="container">
        <div class="row-grid">
            <p class="heading-text"> HOT</p>
        </div>
        <div class="row-grid row-grid-hot-product">
          @foreach ( $products as $product )
          <div class="hot-product-item">
           <a href="/product/{{$product -> id}}"> <img src="{{ asset($product -> image) }}" alt=""></a>
              <p style="font-size: 20px"><a href="/product/{{$product -> id}}">{{$product -> name}}</a></p>
                  <span style="margin-left:170px">{{$product -> material}}</span>
            <div
                class="hot-product-item-cost">
                    <p style="font-size: 18px;font-weight: 300">{{number_format($product -> price_nomal)}}<sup>vnđ</sup> <span>{{ number_format($product -> price_sale)}}<sup>vnđ</sup></span></p>
            </div>
        </div>
          @endforeach
        </div>
    </div> --}}
</section>
    <br>
<!--------------------------san pham pho bien-------->
     {{-- <section>
        <div class="hot-product">
            <div class="container">
                <div class="row-grid">
                    <p class="heading-text"> Sản phẩm phổ biến</p>
                </div>
                <div class="row-grid row-grid-hot-product">
                    <div class="hot-product-item">
                        <img src="{{ asset('frondend/asset/image/447689225_1015700926590923_5921409322940419218_n.jpg') }}" alt="">
                            <p>Áo polo 220G</p>
                              <span>100%cotton</span>
                        <div
                            class="hot-product-item-cost">
                                <p>120,000<sup>vnđ</sup> <span>150,000<sup>vnđ</sup></span></p>
                        </div>
                    </div>
                    <div class="hot-product-item">
                        <img src="{{ asset('frondend/asset/image/455696922_1063384535151938_5028639137418669469_n.jpg') }}" alt="">
                            <p>Áo dài tay 23</p>
                              <span>100%cotton</span>
                        <div
                            class="hot-product-item-cost">
                                <p>120,000<sup>vnđ</sup> <span>150,000<sup>vnđ</sup></span></p>
                        </div>
                    </div>
                    <div class="hot-product-item">
                        <img src="{{ asset('frondend/asset/image/ao_xanh.png') }}" alt="">
                            <p>Áo sơ mi trắng</p>
                              <span>100%cotton</span>
                        <div
                            class="hot-product-item-cost">
                                <p>120,000<sup>vnđ</sup> <span>150,000<sup>vnđ</sup></span></p>
                        </div>
                    </div>
                    <div class="hot-product-item">
                        <img src="{{ asset('frondend/asset/image/455696922_1063384535151938_5028639137418669469_n.jpg') }}" alt="">
                            <p>Áo sơ mi sọc</p>
                              <span>100%cotton</span>
                        <div
                            class="hot-product-item-cost">
                                <p>120,000<sup>vnđ</sup> <span>150,000<sup>vnđ</sup></span></p>
                        </div>
                    </div>
                    <div class="hot-product-item">
                        <img src="{{ asset('frondend/asset/image/nau1.png') }}" alt="">
                            <p>Áo polin 100</p>
                              <span>100%cotton</span>
                        <div
                            class="hot-product-item-cost">
                                <p>120,000<sup>vnđ</sup> <span>150,000<sup>vnđ</sup></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

@include('parts.footer')
</body>
</html>