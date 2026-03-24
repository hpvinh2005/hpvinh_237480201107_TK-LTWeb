<?php

do
{
    $x = rand(1,100);
    $y = rand(1,100);
}
while($x <= $y);

echo "<h3>Hai số ngẫu nhiên với điều kiện x > y</h3>";

echo "x = $x <br>";
echo "y = $y <br><br>";

echo "x + y = ".($x+$y)."<br>";
echo "x - y = ".($x-$y)."<br>";
echo "x * y = ".($x*$y)."<br>";
echo "x / y = ".($x/$y)."<br>";
echo "x % y = ".($x%$y)."<br>";

?>