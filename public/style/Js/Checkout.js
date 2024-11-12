document.addEventListener('DOMContentLoaded', function () {
    var orderTableBody = document.getElementById('orderTableBody');
    var subtotalElement = document.getElementById('subtotal');
    var totalAmountElement = document.getElementById('totalAmount');

    // Lấy dữ liệu sản phẩm từ localStorage
    var products = JSON.parse(localStorage.getItem('cart-product')) || {};
    var subtotal = 0;

    for (var productId in products) {
        var product = products[productId];
        var productTotalPrice = product.price * product.quantity;
        subtotal += productTotalPrice;

        var newRow = document.createElement('tr');
        newRow.innerHTML = `
            <td><img class="img-cart" src="${product.image}" alt="${product.name}" /></td>
            <td>${product.name}</td>
            <td>${product.price}</td>
            <td>${product.quantity}</td>
        `;

        orderTableBody.appendChild(newRow);
    }

    subtotalElement.textContent = 'VND ' + subtotal.toLocaleString();
    var totalAmount = subtotal;
    totalAmountElement.textContent = totalAmount.toLocaleString();
});
