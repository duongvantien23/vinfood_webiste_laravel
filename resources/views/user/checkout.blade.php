<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/Css/Thanhtoan.css') }}">
    <link rel="stylesheet" href="fontawesome-free-6.3.0-web/css/all.css">
    <link rel="icon" href="Img/logo.png">
    <title>Thanhtoan.vn</title>
</head>
<body>
    <div class="Main">
        <div class="wrap">
            <div class="main content">
                <div class="main-head">
                    <a href="" class="title heading"><h2 class="logo-text">Thực phẩm sạch Vinffood</h2></a>
                    <div class="col_center">
                        <ul class="home-center">
                            <li>
                                <a id="home-heading" href="">
                                    <span>Giỏ hàng</span>
                                </a>
                                <span>&nbsp;</span>
                                <i class="fa fa-angle-right"></i>&nbsp;
                                <span class="a-tittle">Thông tin giao hàng</span>
                                <i class="fa fa-angle-right"></i>&nbsp;
                                <span class="a-tittle">Phương thức thanh toán</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section-header">
                    <h2 class="section-title">Thông tin giao hàng</h2>
                </div>
                <div class="section-profile">
                    <p class="section-content-text">
                        Bạn đã có tài khoản?
                        <a href="Dangnhap.html">Đăng nhập</a>
                    </p>
                    <form id="checkout-form">
                        <div class="field-input-wrapper">
                            <label class="field-label" for="billing_address_full_name">Họ và tên:</label>
                            <input placeholder="Họ và tên" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_full_name" name="full_name" value="" autocomplete="off">
                        </div>
                        <div class="field-input-wrapper">
                            <label class="field-label" for="billing_address_phone">Số điện thoại:</label>
                            <input autocomplete="off" placeholder="Số điện thoại" autocapitalize="off" spellcheck="false" class="field-input" size="30" maxlength="15" type="tel" id="billing_address_phone" name="phone" value="">
                        </div>
                        <div class="field-input-wrapper">
                            <label class="field-label" for="billing_address_address1">Thành phố:</label>
                            <input placeholder="Địa chỉ" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address1" name="address1" value="">
                        </div>
                        <div class="field-input-wrapper">
                            <label class="field-label" for="billing_address_address2">Địa chỉ giao hàng:</label>
                            <input placeholder="Địa chỉ giao hàng" autocapitalize="off" spellcheck="false" class="field-input" size="30" type="text" id="billing_address_address2" name="address2" value="">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="payment_method">Phương Thức Thanh Toán</label>
                            <select name="payment_method" id="payment_method">
                                <option value="">Chọn phương thức</option>
                                <option value="1">Thanh toán khi nhận hàng</option>
                                <option value="2">Thanh toán qua thẻ</option>
                            </select>
                        </div>
                        <div class="step-footer" id="step-footer-checkout">													
                            <a class="buy-cart-success" href="GioHang.html">Giỏ hàng</a>
                            <input name="utf8" type="hidden" value="✓">
                            <button type="submit" class="step-footer">
                                <span class="btn-content">Tiếp tục đến phương thức thanh toán</span>
                                <i class="btn-spinner icon icon-button-spinner"></i>
                            </button>
                        </div>
                    </form>
                    <div class="line"></div>
                    <div class="main-footer-by">Powered by Haravan</div>
                </div>
            </div>
            <div class="section-right-content">
                <div class="order-product">
                    <h2 class="section-title">Thông tin đơn hàng</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Ảnh sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody id="orderTableBody">
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <div class="discount-code">
                                        <input type="text" placeholder="Mã giảm giá">
                                        <button>Sử dụng</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">Tạm tính</td>
                                <td id="subtotal"></td>
                            </tr>
                            <tr>
                                <td colspan="3">Phí vận chuyển</td>
                                <td>0 VND</td>
                            </tr>
                            <tr>
                                <td colspan="3">Tổng cộng</td>
                                <td>VND <span class="total-upper" id="totalAmount"></span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
document.getElementById('checkout-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn hành vi submit mặc định

    // Thêm logic xử lý đơn hàng ở đây (nếu cần)
    
    // Hiển thị thông báo đặt hàng thành công
    alert('Đặt hàng thành công!');

    // Chuyển hướng đến trang /success
    window.location.href = '/success';
});
</script>
<script src="{{ asset('style/Js/Checkout.js') }}"></script>
</html>
