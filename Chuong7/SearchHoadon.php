<?php
include "Connection.php";

$id = $_POST['id_kh'];

$sql = "SELECT * FROM HOADON WHERE id_nm='$id'";
$result = mysqli_query($conn,$sql);

echo "<table border='1'>
<tr>
<th>Mã HD</th>
<th>Mã KH</th>
<th>Ngày mua</th>
</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['id_hd']."</td>";
    echo "<td>".$row['id_nm']."</td>";
    echo "<td>".$row['ngay_mua']."</td>";
    echo "</tr>";
}

echo "</table>";
?>