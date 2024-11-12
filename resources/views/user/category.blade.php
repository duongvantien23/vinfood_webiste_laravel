
@extends('user.layouthome')
@section('content')
        <div class="background-heading">
            <div class="col_center">
                <ul class="home-center">
                    <h2 style="padding: 10px;" class="tittle-head">{{ $category->TenDanhMuc }}</h2>
                    <li>
                    <a id="home-heading" href="">
                        <span>Trang chủ</span>
                    </a>
                        <span>&nbsp;</span>
                        <i class="fa fa-angle-right"></i>&nbsp;
                    <span class="a-tittle">{{ $category->TenDanhMuc }}</span>
                </li>
                </ul>
            </div>
        </div>
        <div class="category-product">
            <div class="sort-product">
                <div class="text-product">
                    <h1 class="tittle-head">{{ $category->TenDanhMuc }}</h1>
                </div>
                <div class="sort-click">
                    <ul>
                        <li>Sắp xếp theo:</li>
                        <li>
                            <label>
                                <a href="#" data-sort="SPTraiCay">
                                    <i><input class="radio-sort" type="radio" name="sort"></i>A → Z
                                </a>
                            </label>
                        </li>
                        <li>
                            <label>
                                <a href="#" data-sort="Z-a-SPTraiCay">
                                    <i><input class="radio-sort" type="radio" name="sort"></i>Z → A
                                </a>
                            </label>
                        </li>
                        <li>
                            <label>
                                <a href="#" data-sort="PriceAsc-SPTraiCay">
                                    <i><input class="radio-sort" type="radio" name="sort"></i>Giá tăng dần
                                </a>
                            </label>
                        </li>
                        <li>
                            <label>
                                <a href="#" data-sort="PriceDesc-SPTraiCay">
                                    <i><input class="radio-sort" type="radio" name="sort"></i>Giá giảm dần
                                </a>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
<div class="product-container">
    <div class="animation">
        <ul class="product-vinffood">
         <div class="product-grid">
           @foreach($products as $product)
           <ul class="product-vinffood">                                                     
            <li>
             <div class="product_name">
              <img src="{{ asset('Img/' . $product->HinhAnh) }}" alt="">
               <div class="overlay">
                
                <div class="product-buttons">
               <button class="add-to-cart" data-product-id="{{ $product->id }}"><i class="fa-solid fa-bag-shopping"></i></button>
               <a href="{{ route('product.detailt', ['productId' => $product->MaSP]) }}">
                <button class="search"><i class="fa-solid fa-search"></i></button>
                </a>
                </div>
                <h3><a title="{{ $product->TenSP }}" href="">{{ $product->TenSP }}</a></h3><br>
                 <span class="product_price">{{ number_format($product->Gia, 0, ',', '.') }}₫<span>/Khay</span></span>
                                     <!-- <div><button class="buy-sp">Mua ngay <i class="fa-solid fa-bag-shopping"></i></button></div> -->
                             </div>
                     </div>
                 </li>
             </ul>
                @endforeach
         </div>
                        </div>
                    </div>
        <div class="tranform-page">
            <ul class="page-small">
                <li class="page-a page-active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-a"><a class="page-link" href="#">2</a></li>
                <li class="page-a">
                    <a style="font-size: 15px;" class="page-link" href="#">></a>
                </li>
            </ul>
        </div>
@endsection