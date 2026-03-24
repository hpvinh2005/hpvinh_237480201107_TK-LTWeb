<!DOCTYPE html>
<html>
<head>
    <title>Bảng n và n^2</title>
    <style>
        table{
            border-collapse: collapse;
            width: 200px;
        }
        th, td{
            border: 1px solid black;
            text-align: center;
            padding: 5px;
        }
        th{
            background-color: #ddd;
        }
    </style>
</head>

<body>

<h3>Bảng số n và n<sup>2</sup></h3>

<table>
    <tr>
        <th>Số n</th>
        <th>Số n²</th>
    </tr>

    <?php
        for($n = 0; $n <= 50; $n++)
        {
            $n2 = $n * $n;
            echo "<tr>";
            echo "<td>$n</td>";
            echo "<td>$n2</td>";
            echo "</tr>";
        }
    ?>

</table>

</body>
</html>