<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/Css/Vinfood.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Css/ba-roi-rut-suon.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.3.0-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Css/SPTraiCay.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Css/GioHang.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Css/Gioithieu.css') }}">
    <link rel="stylesheet" href="{{ asset('style/Css/Tintuc.css') }}">
    <link rel="icon" href="{{ asset('Img/logo.png') }}">
    <title>Vinfood.vn</title>
</head>
<body>
    <div class="Main">
        <!-- ------------------Header ----------------->
        @include('includes.header')
        <!---- Content -------------------------------->
        @yield('content')
        <!-- Footer ----------------------------------->
        @include('includes.footer')
    </div>
    <script src="{{ asset('style/Js/Vinfood.js') }}"></script>

    <!-- ------------Trở về đầu trang--------------------------- -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>
</body>
</html>
