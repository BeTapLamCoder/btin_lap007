<?php
require_once("db_module.php");

$link = null;
connect($link);

$sql = "
SELECT bl.*
FROM tbl_binhluan bl
JOIN tbl_bantin bt ON bl.id_bantin = bt.id_bantin
WHERE bt.tieude = 'Sự thay đổi cách thức mua sắm của khách hàng trong thời kỳ khủng hoảng điện tử'
";

$result = chayTruyVanTraVeDL($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Nội dung bình luận: " . $row['noidung'] . "<br>";
    echo "<hr>";
}

xoaBoNho($link, $result);
?>
