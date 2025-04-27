<?php
require_once("db_module.php");

$link = null;
connect($link);

$sql = "SELECT tieude, solike FROM tbl_bantin ORDER BY solike DESC LIMIT 10";
$result = chayTruyVanTraVeDL($link, $sql);

echo "<h2>Top 10 bản tin có nhiều lượt like</h2>";
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>{$row['tieude']} - {$row['solike']} lượt like</li>";
}
echo "</ul>";

xoaBoNho($link, $result);
?>
