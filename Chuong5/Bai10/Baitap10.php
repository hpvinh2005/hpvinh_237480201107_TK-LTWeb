<!DOCTYPE html>
<html>
<head>
    <title>Xử lý mảng số nguyên</title>
</head>

<body>

<form method="post">
    Nhập các số (cách nhau bằng dấu cách): <br>
    <input type="text" name="dayso">
    <input type="submit" value="Thực hiện">
</form>

<?php

if(isset($_POST['dayso']))
{
    $str = $_POST['dayso'];

    $arr = explode(" ", $str);

    echo "<h3>a. Mảng đã nhập:</h3>";
    foreach($arr as $value)
    {
        echo $value." ";
    }

    $demchan = 0;
    $tongle = 0;

    foreach($arr as $value)
    {
        if($value % 2 == 0)
            $demchan++;
        else
            $tongle += $value;
    }

    echo "<br><br>b. Số phần tử chẵn: ".$demchan;

    echo "<br>c. Tổng các số lẻ: ".$tongle;

    echo "<br><br>d. Số lớn nhất: ".max($arr);
    echo "<br>Số nhỏ nhất: ".min($arr);

    echo "<br><br>e. Mảng đảo ngược: ";

    $dao = array_reverse($arr);

    foreach($dao as $value)
    {
        echo $value." ";
    }
}

?>

</body>
</html>