<?php
require_once("db_module.php");

$link = null;
connect($link);

$sql = "SELECT * FROM tbl_bantin WHERE tieude LIKE '%công nghệ%'";
$result = chayTruyVanTraVeDL($link, $sql);

echo "<h2>Các bản tin có chứa từ 'công nghệ'</h2>";
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>{$row['tieude']}</li>";
}
echo "</ul>";

xoaBoNho($link, $result);
?>
