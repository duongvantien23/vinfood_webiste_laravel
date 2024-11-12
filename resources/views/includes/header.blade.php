<header class="header">
            <a href="" class="logo">
                <img src="Img/logo.png" alt="">
            </a>
            <ul class="nav">
                <li><a class="item--home" href="/home">Trang chủ</a></li>
                <li>
                  <a class="item" href="/intro">Giới thiệu</a>
                <li><a class="item" href="#">Sản Phẩm <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="sub-menu">
                        <li>
                        <a href="{{ route('category.show', ['categoryId' => 1]) }}">Trái cây <i class="fa-solid fa-caret-right"></i></a>
                            <ul class="sub-menu box-menu">
                                <li><a href="TraiCayNK.html">Trái cây nhập khẩu</a></li>
                                <li><a href="TraiCayHC.html">Trái cây hữu cơ</a></li>
                            </ul>
                         </li>
                         <li><a href="{{ route('category.show', ['categoryId' => 8]) }}">Rau - Củ sạch</a></li>
                         <li><a href="{{ route('category.show', ['categoryId' => 2]) }}">Gạo</a></li>
                         <li><a href="{{ route('category.show', ['categoryId' => 3]) }}">Các Loại Thịt & Hải Sản <i class="fa-solid fa-caret-right"></i></a>
                            <ul class="sub-menu">
                                <li><a href="#">Thịt Heo MeatDeli</a></li>
                                <li><a href="#">Thịt Gà CP</a></li>
                                <li><a href="#">Thịt Heo CP</a></li>
                                <li><a href="#">Bò Tơ Tây Ninh</a></li>
                                <li><a href="#">Hải Sản</a></li>
                            </ul>
                        </li>
                         <li><a href="{{ route('category.show', ['categoryId' => 4]) }}">Đặc sản vùng miền</a></li>
                         <li><a href="{{ route('category.show', ['categoryId' => 5]) }}">Hàng xách tay Mỹ - Nhật - Hàn</a></li>
                      </ul>
                </li>
                <li><a class="item" href="/blog">Tin Tức</a></li>
             </ul>
             <!-- icon---MENU -->
             <div class="icons">
                <div class="fa-solid fa-magnifying-glass" id="icon-seach">
                    <div class="search-form">
                        <input type="search" id="search-box" placeholder="Tìm kiếm...">
                        <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
                    </div>
                </div>
                <div class="fa-solid fa-user-plus" id="icon-user">
                    <div class="user-form">
                        <div class="login-box"><a href="Dangnhap.html" class="button-gradient">Đăng nhập</a></div>
                        <div class="login-register"><a href="Dangky.html">Đăng ký</a></div>                 
                    </div>
                </div>
                <a class="fa-solid fa-basket-shopping icon-cart" id="icon-btn" href="/cart">
                    <!-- <div class="icon-shopping--no-cart">
                        <p>Không có sản phẩm nào trong giỏ hàng</p>
                    </div> -->
                    <span id="cart-item-count">0</span> <!-- Thêm phần tử để hiển thị số lượng đơn hàng -->
                </a>
                 
            </div>
        <!-- ---------------------------------------------------------------------------------- -->
        </header>