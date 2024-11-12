@extends('user.layouthome')
@section('content')
<div class="background-heading">
            <div class="col_center">
                <ul class="home-center">
                    <h2 style="padding: 10px;" class="tittle-head">Tài khoản</h2>
                    <li>
                    <a id="home-heading" href="">
                        <span>Trang chủ</span>
                    </a>
                        <span>&nbsp;</span>
                        <i class="fa fa-angle-right"></i>&nbsp;
                    <span class="a-tittle">Tài khoản</span>
                </li>
                </ul>
            </div>
        </div>
        <h1 class="tittle_login"><span>Tài Khoản</span></h1>
        <div class="login-container">
            <div class="profile-contact">
                <div class="profile-small">
                    <span>Nếu bạn đã có tài khoản, đăng nhập tại đây.</span>
                </div>
                <div class="form-login">
                    <label>Email: </label><br><br>
                    <input type="email" class="email-login" placeholder="Email">
                </div>
                <div class="form-login">
                    <label>Mật khẩu: </label><br><br>
                    <input type="password" class="password-login" onblur="checkinputpass()" placeholder="Mật khẩu">
                </div>
                <div class="btn-login">
                    <input class="input-login" type="button" type="button" onclick="checkEmail()" value="Đăng nhập">
                    <a class="btn-resgister" href="Dangky.html">Đăng ký</a>
                </div>
            </div>
            <div class="recover-login">
                <div class="profile-recover">
                    <span>Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.</span>
                </div>
                <div class="form-login">
                    <label>Email: </label><br><br>
                    <input type="email" class="email-login" placeholder="Email">
                </div>
                <div class="recover-login-click">
                    <input class="input-login" type="submit" value="Lấy lại mật khẩu">
                </div>
            </div>
        </div>
@endsection