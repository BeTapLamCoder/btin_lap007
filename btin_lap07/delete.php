<?php
require_once("db_module.php");


$link = null;
connect($link);


$sql = "DELETE FROM tbl_bantin
WHERE id_bantin = 17;";


$result = chayTruyVanKhongTraVeDL($link, $sql);


if ($result) {
    echo "Xoa bản tin thành công!";
} else {
    echo "Lỗi khi xóa bản tin: ";
}


xoaBoNho($link, $result);
