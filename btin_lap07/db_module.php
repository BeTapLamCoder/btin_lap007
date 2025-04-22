<?php
require_once("config.php");

function connect(&$link) {
    $link = mysqli_connect(HOST, USER, PASS, DB);
    if(mysqli_connect_errno()) {
        echo "Loi ket noi: " . mysqli_connect_error();
        exit();
    }
}
function chayTruyVanTraVeDL($link, $sql) {
    $result = mysqli_query($link, $sql);
    return $result;
}
function chayTruyVanKhongTraVeDL($link, $sql) {
    $result = mysqli_query($link, $sql);
    return $result;
}
function xoaBoNho($link, $result = null) {
    if ($result && gettype($result) === "object") {
        mysqli_free_result($result);
    }
    mysqli_close($link);
}


?>