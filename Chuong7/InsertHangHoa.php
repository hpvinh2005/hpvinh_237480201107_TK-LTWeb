<?php
include "Connection.php"; // dùng file bạn đã tạo

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id_hh'];
    $ten = $_POST['ten_hh'];
    $ncc = $_POST['id_ncc'];
    $nam = $_POST['nam_sx'];
    $gia = $_POST['don_gia'];
    $sl = $_POST['so_luong'];

    $sql = "INSERT INTO HANGHOA (id_hh, ten_hh, id_ncc, nam_sx, don_gia, so_luong) 
            VALUES ('$id', '$ten', '$ncc', $nam, $gia, $sl)";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm hàng hóa thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>