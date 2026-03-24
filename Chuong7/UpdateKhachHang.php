<?php
include "Connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id_kh'];
    $ten = $_POST['ten_kh'];
    $sdt = $_POST['sdt'];
    $dc = $_POST['diachi'];

    $sql = "UPDATE KHACHHANG 
            SET ten_kh = '$ten',
                sdt = '$sdt',
                diachi = '$dc'
            WHERE id_kh = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Cập nhật khách hàng thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>