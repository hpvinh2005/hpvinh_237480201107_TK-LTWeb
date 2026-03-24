<?php
// Thông tin kết nối
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "quanly_cuahang";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Set charset (quan trọng để hiển thị tiếng Việt)
mysqli_set_charset($conn, "utf8");
echo "kết nối thành công";
?>