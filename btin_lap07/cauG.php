<?php
require_once("db_module.php");


$link = null;
connect($link);


$sql = "INSERT INTO tbl_bantin (`id_bantin`, `id_danhmuc`, `tieude`, `hinhanh`, `noidung`, `tukhoa`, `nguontin`, `solike`, `rating`)
VALUES (17, (SELECT id_danhmuc FROM tbl_danhmuc WHERE ten_danhmuc = 'Công nghệ'), 
        'Bản tin mới về công nghệ AI', 'ai.jpg', 'Nội dung liên quan đến công nghệ AI...', 
        'công nghệ, AI', '2025-04-16', 4.5, 0)";


$result = chayTruyVanKhongTraVeDL($link, $sql);


if ($result) {
    echo "Thêm bản tin mới thành công!";
} else {
    echo "Lỗi khi thêm bản tin: ";
}


xoaBoNho($link, $result);
