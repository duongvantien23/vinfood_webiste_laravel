
<ul class="product-vinffood">
         <div class="product-grid">
           @foreach($newArrivalProducts as $spnew)
           <ul class="product-vinffood">                                                     
            <li>
             <div class="product_name">
              <img src="{{ asset('Img/' . $spnew->HinhAnh) }}" alt="">
               <div class="overlay">
                
                <div class="product-buttons">
               <button class="add-to-cart" data-product-id="{{ $spnew->id }}"><i class="fa-solid fa-bag-shopping"></i></button>
               <a href="{{ route('product.detailt', ['productId' => $spnew->MaSP]) }}">
                <button class="search"><i class="fa-solid fa-search"></i></button>
                </a>
                </div>
                <h3><a title="{{ $spnew->TenSP }}" href="">{{ $spnew->TenSP }}</a></h3><br>
                 <span class="product_price">{{ number_format($spnew->Gia, 0, ',', '.') }}₫<span>/Khay</span></span>
                                     <!-- <div><button class="buy-sp">Mua ngay <i class="fa-solid fa-bag-shopping"></i></button></div> -->
                             </div>
                     </div>
                 </li>
             </ul>
                @endforeach
         </div>
         