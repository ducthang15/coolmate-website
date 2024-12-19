<header id="header">
    <div class="container">
        <div class="row-flex">
            <div class="header-bar-icon">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div class="header-logo">
                <a href="{{ url('/')}}"><img src="{{ asset('frondend/asset/image/logooooo.png') }}" alt="logo"></a>
            </div>
            <div class="header-logo-mobile">
                <img src="{{ asset('frondend/asset/image/logooooo.png') }}" alt="">
            </div>
            <div class="header-nav">
                <nav>
                    <ul>
                        <li><a href="http://127.0.0.1:5500/product.html">SẢN PHẨM</a></li>
                        <li><a href="">SALE</a></li>
                        <li><a href="">SẢN XUẤT RIÊNG</a></li>
                        <li><a href="">HÀNG MỚI VỀ</a></li>
                        <li><a href="">LIÊN HỆ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-search">         
                    <input type="text" placeholder="Tìm kiếm " >
                    <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="header-cart">
                <a href="{{'/cart'}}"><i class="fa fa-shopping-cart" number = "0"></i></a> 
            </div>
            <div class="header-login">
                <a href=""></a>
            </div>
        </div>
    </div>
    </header>