<?php
include_once '../database.php';
$sql = "DELETE FROM `orders_detail`";
// echo $sql;
$conn->exec($sql);
//chuyen huong ve trang list.php
header('location:index.php');
