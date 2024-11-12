@extends('user.layouthome')
@section('content')
<div class="background-heading">
            <div class="col_center">
                <ul class="home-center">
                    <h2 style="padding: 10px;" class="tittle-head">Đang chờ xác nhận</h2>
                    <li>
                    <a id="home-heading" href="">
                        <span>Thanh toán</span>
                    </a>
                        <span>&nbsp;</span>
                        <i class="fa fa-angle-right"></i>&nbsp;
                    <span class="a-tittle">Đang chờ xác nhận</span>
                </li>
                </ul>
            </div>
        </div>
        <div class="header-cart">
            <h1 class="title-cart">
                <span>Đơn hàng đã được đặt thành công.</span>
                <span>Xin vui lòng đợi trong khi chúng tôi xử lý đơn hàng của bạn.</span>
            </h1>
        </div>
        <div class="total-product">
            <ul>
                <li><button type="button" class="continue-shopping-btn">Tiếp tục mua hàng</button></li>
                <li><a class="proceed-checkout-btn" href="chitietdonhang.html">Xem chi tiết đơn hàng</a></li>
            </ul>
        </div>
        @endsection