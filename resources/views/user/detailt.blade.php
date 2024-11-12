
@extends('user.layouthome')
@section('content')
        </header>
        <div class="background-heading">
            <div class="col_center">
                <ul class="home-center">
                    <h2 style="padding: 10px;" class="tittle-heading">{{ $product->TenSP }}</h2>
                    <li>
                    <a id="home-heading" href="">
                        <span>Trang chủ</span>
                    </a>
                        <span>&nbsp;</span>
                        <i class="fa fa-angle-right"></i>&nbsp;
                        <a id="home-heading" href="">
                            <span>{{ $product->danhMuc->TenDanhMuc }}</span>
                        </a>
                    <i class="fa fa-angle-right"></i>&nbsp;
                    <span class="a-tittle">{{ $product->TenSP }}</span>
                </li>
                </ul>
            </div>
        </div>
        <div class="product-wrap">
            <div class="row-product">
                <div class="img_container">
                    <img id="mainImage" src="{{ asset('Img/' . $product->HinhAnh) }}" alt="">
                    <!-- <div class="img-small">
                        <div class="item1" onclick="changeImage('Img/Product-baroi1.jpg')"><img src="Img/Product-baroi1.jpg" alt=""></div>
                        <div class="item2" onclick="changeImage('Img/Product-baroi2.webp')"><img src="Img/Product-baroi2.webp" alt=""></div>
                        <div class="item3" onclick="changeImage('Img/Product-baroi3.webp')"><img src="Img/Product-baroi3.webp" alt=""></div>
                    </div> -->
                </div>
                <div class="profile-product">
                    <h1 class="title-product">{{ $product->TenSP }}</h1>
                    <div class="status-product">
                        <span class="firt-status">Thương hiệu:
                            <span class="status_name">Vinffood</span>
                        </span>
                            <span class="line-status">|</span>
                            <span class="firt-status2">Tình trạng:</span>
                            <span class="status_name">Còn hàng</span>
                    </div>
                    <div class="price-box">
                        <span class="product-price">{{ number_format($product->Gia, 0, ',', '.') }} ₫ <span>/{{ $product->DonViTinh }}</span></span>
                        <div class="describe-product">
                            <p>{{ $product->Mota }}</p><hr class="line-descripe">
                        </div>
                    </div>
                    <div class="buy-product">
                        <div class="custom-sl">
                            <span style="color: black;font-weight: 900;margin-right: 10px;">Số lượng: </span>
                            <button class="remove" type="button">-</button>
                            <input type="text" class="count" value="1" min="1">
                            <button class="add" type="button">+</button>
                        </div>
                        <div class="buy-product-gradient">
                            <button type="submit" class="btn-gradient">
                                <span class="btn-content">Thêm vào giỏ hàng</span>
                            </button>
                        </div>
                        <div class="hotline-product"><span class="hotline"> Gọi đặt mua: <a href="tel:0908606539">0908606539</a> để nhanh chóng đặt hàng</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-brand">
            <div class="banner-product">
                <img class="img-detailt" src="{{ asset('Img/' . $product->HinhAnh) }}" alt="">
            </div>
            <div class="detail-product">
                <ul>
                    <li>
                        <h3>Mô tả sản phẩm</h3>
                        <div class="line-stright"></div><hr color="#ebebeb" width="66%" style="margin-left: 280px;">
                    </li>
                </ul>
            </div>
            <div class="body-brand">
                <p class="descripe-head"><b>{{ $product->TenSP }}</b> {{ $product->Mota }}<b>.
              
                <h2>{{ $product->TenSP }}&nbsp;đạt các tiêu chuẩn về an toàn toàn thực phẩm:</h2>
                <p class="descripe-body">-&nbsp;GMP<br>- HACCP<br>- ISO 14001:2004<br>- ISO 9001:2008</p>
                <h2>{{ $product->TenSP }}</h2>
                <p class="descripe-body">- Không chất tăng trọng.<br>- Hệ thống chăn nuôi khép kín.<br>- Sử dụng thức ăn chất lượng cao.<br>- Truy xuất được nguồn gốc.</p>
            </div>
        </div>
        <section class="section_bestsale">
            <div class="product-container">
                <h1><a href="" class="text-gradient">SẢN PHẨM LIÊN QUAN</a></h1>
                <h2 class="tittle-head"><img src="Img/bg_title.webp" alt=""></h2>
                <div class="animation">       
      <ul class="product-vinffood">
         <div class="product-grid">
         @foreach($relatedProducts as $relatedProduct)
           <ul class="product-vinffood">                                                     
            <li>
             <div class="product_name">
              <img src="{{ asset('Img/' . $relatedProduct->HinhAnh) }}" alt="">
               <div class="overlay">
                
                <div class="product-buttons">
               <button class="add-to-cart" data-product-id="{{ $relatedProduct->id }}"><i class="fa-solid fa-bag-shopping"></i></button>
               <a href="{{ route('product.detailt', ['productId' => $relatedProduct->MaSP]) }}">
                <button class="search"><i class="fa-solid fa-search"></i></button>
                </a>
                </div>
                <h3><a title="{{ $relatedProduct->TenSP }}" href="">{{ $relatedProduct->TenSP }}</a></h3><br>
                 <span class="product_price">{{ number_format($relatedProduct->Gia, 0, ',', '.') }}₫<span>/Khay</span></span>
                                     <!-- <div><button class="buy-sp">Mua ngay <i class="fa-solid fa-bag-shopping"></i></button></div> -->
                             </div>
                     </div>
                 </li>
             </ul>
                @endforeach
         </div> 
                            </div>
                        </div>
         </section>
@endsection