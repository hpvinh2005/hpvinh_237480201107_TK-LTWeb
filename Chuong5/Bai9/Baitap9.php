<!DOCTYPE html>
<html>
<head>
    <title>Bảng cửu chương</title>
</head>

<body>

<h3>Bảng cửu chương từ 1 đến 9</h3>

<?php

for($i = 1; $i <= 9; $i++)
{
    echo "<b>Bảng $i</b><br>";

    for($j = 1; $j <= 9; $j++)
    {
        echo "$i x $j = ".($i*$j)."<br>";
    }

    echo "<br>";
}

?>

</body>
</html>