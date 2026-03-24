<?php
include "Connection.php";

$bang = $_POST['bang'];

$sql = "SELECT * FROM $bang";
$result = mysqli_query($conn,$sql);

echo "<h2>Danh sách $bang</h2>";
echo "<table border='1'>";

// tiêu đề cột
$fields = mysqli_fetch_fields($result);
echo "<tr>";
foreach($fields as $field){
    echo "<th>".$field->name."</th>";
}
echo "</tr>";

// dữ liệu
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    foreach($row as $value){
        echo "<td>".$value."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>