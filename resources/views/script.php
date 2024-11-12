<?php
// your_backend_script.php

$servername = "127.0.0.1"; // Thay bằng DB_HOST của bạn
$username = "root"; // Thay bằng DB_USERNAME của bạn
$password = "root123"; // Thay bằng DB_PASSWORD của bạn
$dbname = "db_vinfood"; // Thay bằng DB_DATABASE của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$fullName = $_POST['full_name'];
$phone = $_POST['phone'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$paymentMethod = $_POST['payment_method'];

$conn->autocommit(FALSE);

try {
    // Chèn thông tin khách hàng
    $sql = "INSERT INTO khachhangs (TenKH, SDT, DiaChi) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $fullName, $phone, $address1);
    $stmt->execute();
    $MaKH = $stmt->insert_id;

    // Chèn thông tin đơn hàng
    $sql = "INSERT INTO donhangs (MaKH, MaPhuongThuc, NgayDatHang, DiaChiGiaoHang) VALUES (?, ?, NOW(), ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $MaKH, $paymentMethod, $address2);
    $stmt->execute();
    $MaDonHang = $stmt->insert_id;

    $conn->commit();
    echo "Đặt hàng thành công!";
} catch (Exception $e) {
    $conn->rollback();
    echo "Có lỗi xảy ra: " . $e->getMessage();
} finally {
    $stmt->close();
    $conn->close();
}



