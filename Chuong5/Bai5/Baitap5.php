<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tính USCLN và BSCNN</title>
</head>

<body>

<h2>Nhập hai số nguyên</h2>

<form method="post">

Số a:
<input type="number" name="a"><br><br>

Số b:
<input type="number" name="b"><br><br>

<input type="submit" value="Tính">

</form>

<?php

if(isset($_POST['a']) && isset($_POST['b']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];

    $x = $a;
    $y = $b;

    while($y != 0)
    {
        $r = $x % $y;
        $x = $y;
        $y = $r;
    }

    $uscln = $x;
    $bscnn = ($a * $b) / $uscln;

    echo "<h3>Kết quả</h3>";
    echo "USCLN = $uscln <br>";
    echo "BSCNN = $bscnn";
}

?>

</body>
</html>