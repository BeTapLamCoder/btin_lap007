<?php
require_once("db_module.php");

$link = null;
connect($link);

$sql = "
SELECT bt.*
FROM tbl_bantin bt
JOIN tbl_danhmuc dm ON bt.id_danhmuc = dm.id_danhmuc
WHERE dm.ten_danhmuc IN ('Giáo dục', 'Đời sống')
";

$result = chayTruyVanTraVeDL($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

xoaBoNho($link, $result);
?>
