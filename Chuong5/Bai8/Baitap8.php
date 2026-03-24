<!DOCTYPE html>
<html>
<head>
    <title>Danh sách năm</title>
</head>

<body>

<form>
    Chọn năm:
    <select name="year">

    <?php
        $year = date("Y");   // lấy năm hiện tại

        for($i = 1900; $i <= $year; $i++)
        {
            echo "<option>$i</option>";
        }
    ?>

    </select>
</form>

</body>
</html>