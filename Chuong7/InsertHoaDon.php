<?php
include "Connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_hd = $_POST['id_hd'];
    $id_nm = $_POST['id_nm'];
    $ngay = $_POST['ngay_mua'];

    $sql = "INSERT INTO HOADON (id_hd, id_nm, ngay_mua)
            VALUES ('$id_hd', '$id_nm', '$ngay')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm hóa đơn thành công!";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>