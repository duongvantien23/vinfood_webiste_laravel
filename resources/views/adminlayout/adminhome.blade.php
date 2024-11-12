<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị Vinfood</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body onload="time()">
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="id-card-outline"></ion-icon>
                        </span>
                        <span class="title">Vinfood</span>
                    </a>
                </li>

                <li>
                    <a href="/index">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Tổng Quan</span>
                    </a>
                </li>

                <li>
                    <a href="/sanpham">
                        <span class="icon">
                        <ion-icon name="storefront-outline"></ion-icon>
                        </span>
                        <span class="title">Sản Phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="/categorys">
                        <span class="icon">
                            <ion-icon name="receipt-outline"></ion-icon>
                        </span>
                        <span class="title">Danh Mục</span>
                    </a>
                </li>
                <li>
                    <a href="/customers">
                        <span class="icon">
                            <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">Khách Hàng</span>
                    </a>
                </li>

                <li>
                    <a href="/orders">
                        <span class="icon">
                            <ion-icon name="bag-check-outline"></ion-icon>
                        </span>
                        <span class="title">Đơn Hàng</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="browsers-outline"></ion-icon>
                        </span>
                        <span class="title">Hóa Đơn Nhập</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="storefront-outline"></ion-icon>
                        </span>
                        <span class="title">Nhà Cung Cấp</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="tv-outline"></ion-icon>
                        </span>
                        <span class="title">Tin Tức</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Tài Khoản Người Dùng</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div id="clock" class="header-common"></div>

                <div class="user">
                    <img src="{{asset('/Img/logoavatar.jpg.jpg')}}" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            @yield('content')
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{asset('assets/js/quanly.js')}}"></script>
</body>

</html>