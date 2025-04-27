<?php
require_once("db_module.php");


$link = null;
connect($link);


$sql = "INSERT INTO tbl_binhluan (`id_binhluan`, `tieude`, `noidung`, `thoigian`, `id_bantin`, `id_docgia`)
VALUES 
(7, 'Hello', 'Bài viết rất dở.', '2025-04-16 10:00:00',
 (SELECT id_bantin FROM tbl_bantin WHERE tieude = 'Liệu Samsung sẽ thành công với Galaxy S4 hay sẽ rơi vào tình trạng suy giảm sự tin cậy của nhà đầu tư như Apple'), 
 2)";


$result = chayTruyVanKhongTraVeDL($link, $sql);


if ($result) {
    echo "Thêm bình luận mới thành công!";
} else {
    echo "Lỗi khi thêm bình luận: ";
}


xoaBoNho($link, $result);
