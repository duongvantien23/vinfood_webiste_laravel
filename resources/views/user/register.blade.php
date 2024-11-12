@extends('user.layouthome')
@section('content')
<div class="background-heading">
            <div class="col_center">
                <ul class="home-center">
                    <h2 style="padding: 10px;" class="tittle-head">Tạo tài khoản</h2>
                    <li>
                    <a id="home-heading" href="">
                        <span>Trang chủ</span>
                    </a>
                        <span>&nbsp;</span>
                        <i class="fa fa-angle-right"></i>&nbsp;
                    <span class="a-tittle">Tạo tài khoản</span>
                </li>
                </ul>
            </div>
        </div>
        <h1 class="tittle_login"><span>Tạo tài khoản</span></h1>
        <div class="regester-container">
            <div class="profile-regester-user">
                <div class="profile-small">
                    <span>Nếu chưa có tài khoản vui lòng đăng ký tại đây</span>
                </div>
                <div class="regester-custom">
                    <div class="form-regester">
                        <label>Họ </label>
                        <input id="firtname" type="name" class="name-res-login" placeholder="">
                    </div>
                    <div class="form-regester">
                        <label>Email: </label>
                        <input id="email" type="email" class="email-login" placeholder="">
                    </div>
                    <div class="btn-regester">
                        <input class="input-login" name="check" href="" type="button" value="Đăng ký" >
                        <a class="btn-resgister" href="Dangnhap.html">Đăng nhập</a>
                    </div>
                </div>
                
            </div>
            <div class="profile-regester-user-right">
                <div class="form-regester">
                    <label>Tên: </label>
                    <input type="lastname" class="name-login" placeholder="">
                </div>
                <div class="form-regester">
                    <label>Mật khẩu: </label>
                    <input id="password" type="password" class="email-login" placeholder="">
                </div>
            </div>
        </div>
@endsection