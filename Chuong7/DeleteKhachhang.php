<?php
include "Connection.php";

$id = $_POST['id_kh'];

$sql = "DELETE FROM KHACHHANG WHERE id_kh='$id'";

if(mysqli_query($conn,$sql)){
    echo "Xóa thành công";
}else{
    echo "Lỗi: ".mysqli_error($conn);
}
?>