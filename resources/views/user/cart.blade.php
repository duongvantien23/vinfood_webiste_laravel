@extends('user.layouthome')
@section('content')
        <div class="background-heading">
            <div class="col_center">
                <ul class="home-center">
                    <h2 style="padding: 10px;" class="tittle-head"> Giỏ hàng của bạn - Thực phẩm sạch Vinffood</h2>
                    <li>
                    <a id="home-heading" href="">
                        <span>Trang chủ</span>
                    </a>
                        <span>&nbsp;</span>
                        <i class="fa fa-angle-right"></i>&nbsp;
                    <span class="a-tittle"> Giỏ hàng của bạn - Thực phẩm sạch Vinffood</span>
                </li>
                </ul>
            </div>
        </div>
        <div class="header-cart">
            <h1 class="title-cart">
                <span>Giỏ hàng của bạn</span>
                <span>(<span class="cart-popup-count">0</span> sản phẩm)</span>
            </h1>
        </div>
        
        <div class="product-cart">
            <div class="product-scoll">
                <table>
                    <thead>
                        <tr>
                            <th>Ảnh sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Thao tác</th>
                            <th>Chọn</th>
                        </tr>
                    </thead>
                    <tbody id="cartBody">
                   
                </tbody>
                </table>
            </div>
        </div>
        
        <div class="total-price-all">
            <span class="tt">Thành tiền:</span>
            <strong><span class="totals_price price">0 đ</span></strong>
        </div>
        
        <div class="total-product">
            <ul>
                <li><button type="button" class="continue-shopping-btn">Tiếp tục mua hàng</button></li>
                <li><a class="proceed-checkout-btn">Tiến hành đặt hàng</a></li>
            </ul>
        </div>
        <script src="{{ asset('style/Js/Cart.js') }}"></script>
@endsection