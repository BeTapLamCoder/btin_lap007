<?php
require_once("db_module.php");

$link = null;
connect($link);

$sql = "
    SELECT dg.* 
    FROM tbl_docgia dg
    JOIN tbl_binhluan bl ON dg.id_docgia = bl.id_docgia
    JOIN tbl_bantin bt ON bl.id_bantin = bt.id_bantin
    WHERE bt.tieude = 'Thoái trào tất yếu của Apple trước cạnh tranh trên thị trường smartphone'
    AND bl.noidung LIKE '%ngốc nghếch%'
";

$result = chayTruyVanTraVeDL($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Tên độc giả: " . $row['id_docgia'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "<hr>";
}

xoaBoNho($link, $result);
?>
