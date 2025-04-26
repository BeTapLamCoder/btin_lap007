<?php
// Hiện thông báo lỗi nếu có
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("db_module.php");
$link = null;
connect($link);

$sql = "UPDATE tbl_bantin 
        SET noidung = 'Nội dung mới đã được cập nhật cho bài viết này.'
        WHERE id_bantin = 123";

$result = chayTruyVanKhongTraVeDL($link, $sql);

if ($result) {
    echo "✅ Cập nhật thành công!";
} else {
    echo "❌ Cập nhật không thành công!";
}

xoaBoNho($link);
?>