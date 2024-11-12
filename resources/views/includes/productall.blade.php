
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
         </ul>
         