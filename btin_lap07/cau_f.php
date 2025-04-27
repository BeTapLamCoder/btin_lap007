<?php
require_once("db_module.php");

$link = null;
connect($link);

$sql = "
    SELECT tieude, solike 
    FROM tbl_bantin
";

$result = chayTruyVanTraVeDL($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Tiêu đề bài viết: " . $row['tieude'] . "<br>";
    echo "Số lượt like: " . $row['solike'] . "<br>";
    echo "<hr>";
}

xoaBoNho($link, $result);
?>
