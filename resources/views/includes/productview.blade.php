
<ul class="product-vinffood">
         <div class="product-grid">
           @foreach($mostViewedProducts as $spview)
           <ul class="product-vinffood">                                                     
            <li>
             <div class="product_name">
              <img src="{{ asset('Img/' . $spview->HinhAnh) }}" alt="">
               <div class="overlay">
                <div class="product-buttons">
               <button class="add-to-cart" data-product-id="{{ $spview->id }}"><i class="fa-solid fa-bag-shopping"></i></button>
               <a href="{{ route('product.detailt', ['productId' => $spview->MaSP]) }}">
                <button class="search"><i class="fa-solid fa-search"></i></button>
                </a>
                </div>
                <h3><a title="{{ $spview->TenSP }}" href="">{{ $spview->TenSP }}</a></h3><br>
                 <span class="product_price">{{ number_format($spview->Gia, 0, ',', '.') }}₫<span>/Khay</span></span>
                 <div class="product_view"><span>Số lượt xem: </span><span>{{ $spview->LuotXem }}</span> <i class="fa-solid fa-eye icon-view"></i></div>
                <!-- <div><button class="buy-sp">Mua ngay <i class="fa-solid fa-bag-shopping"></i></button></div> -->
                     </div>
                     </div>
                 </li>
             </ul>
            @endforeach
        </div>
