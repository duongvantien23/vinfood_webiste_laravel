document.addEventListener('DOMContentLoaded', function () {
    var cartItemCountElement = document.getElementById('cart-item-count');
    var cartBody = document.getElementById('cartBody');
    var totalsPrice = document.querySelector('.totals_price');
    var cartPopupCount = document.querySelector('.cart-popup-count');

    renderCart(); // Gọi hàm renderCart khi trang web được tải

    // Thêm sự kiện lắng nghe cho nút tăng, giảm số lượng và nút xóa sản phẩm
    cartBody.addEventListener('click', function (event) {
        var target = event.target;
        if (target.classList.contains('increase-quantity')) {
            var productId = target.getAttribute('data-product-id');
            changeQuantity(productId, 1);
        } else if (target.classList.contains('decrease-quantity')) {
            var productId = target.getAttribute('data-product-id');
            changeQuantity(productId, -1);
        } else if (target.classList.contains('remove-product-btn')) {
            var productId = target.getAttribute('data-product-id');
            removeProduct(productId);
        }
    });

    function renderCart() {
        var cart = JSON.parse(localStorage.getItem('cart-product')) || {};
        var itemCount = 0;
        var totalPrice = 0;

        cartBody.innerHTML = '';

        // Duyệt qua từng sản phẩm trong giỏ hàng và render ra HTML
        for (var productId in cart) {
            var product = cart[productId];
            var productTotalPrice = product.price * product.quantity;

            
            itemCount += product.quantity;
            
            totalPrice += productTotalPrice;
          
            var formattedPrice = productTotalPrice.toLocaleString('vi-VN');

           
            var newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td><img class="img-cart" src="${product.image}" alt="${product.name}" /></td>
                <td>${product.name}</td>
                <td>
                    <button class="decrease-quantity" data-product-id="${productId}">-</button>
                    <span>${product.quantity}</span>
                    <button class="increase-quantity" data-product-id="${productId}">+</button>
                </td>
                <td>${formattedPrice} đ</td>
                <td><button class="remove-product-btn" data-product-id="${productId}">Xóa</button></td>
                <td><input type="checkbox" class="select-product-checkbox" /></td>
            `;

            // Thêm row vào cartBody
            cartBody.appendChild(newRow);
        }

        // Hiển thị tổng số lượng sản phẩm và tổng giá tiền
        cartPopupCount.textContent = itemCount;
        totalsPrice.textContent = totalPrice.toLocaleString('vi-VN') + ' đ';
        cartItemCountElement.textContent = itemCount;
    }

    function changeQuantity(productId, amount) {
        var cart = JSON.parse(localStorage.getItem('cart-product')) || {};
        if (cart[productId]) {
            cart[productId].quantity += amount;
            if (cart[productId].quantity < 1) {
                delete cart[productId];
            }
            localStorage.setItem('cart-product', JSON.stringify(cart));
            renderCart();
        }
    }

    function removeProduct(productId) {
        var cart = JSON.parse(localStorage.getItem('cart-product')) || {};
        delete cart[productId];
        localStorage.setItem('cart-product', JSON.stringify(cart));
        renderCart();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Lắng nghe sự kiện khi bấm vào nút "Tiến hành đặt hàng"
    var proceedCheckoutBtn = document.querySelector('.proceed-checkout-btn');
    proceedCheckoutBtn.addEventListener('click', function () {
        var selectedProducts = [];

        // Lặp qua tất cả các checkbox
        var checkboxes = document.querySelectorAll('.select-product-checkbox');
        checkboxes.forEach(function (checkbox) {
            // Nếu checkbox được chọn
            if (checkbox.checked) {
                // Lấy thông tin sản phẩm từ data attribute
                var productId = checkbox.getAttribute('data-product-id');
                var productName = checkbox.getAttribute('data-product-name');
                var productImage = checkbox.getAttribute('data-product-image');
                var productPrice = checkbox.getAttribute('data-product-price');
                var productQuantity = checkbox.getAttribute('data-product-quantity');

                // Thêm thông tin sản phẩm vào mảng selectedProducts
                selectedProducts.push({
                    id: productId,
                    name: productName,
                    image: productImage,
                    price: productPrice,
                    quantity: productQuantity
                });
            }
        });

        // Lưu danh sách các sản phẩm đã chọn vào localStorage
        localStorage.setItem('selectedProducts', JSON.stringify(selectedProducts));

        // Chuyển hướng đến trang thanh toán
        window.location.href = '/checkout';
    });
});


