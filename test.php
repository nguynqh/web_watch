<?php
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "web_watch";

$conn = mysqli_connect($sname,$uname,$password,$db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

header("Location: index.php?dang_nhap_thanh_cong");
?>