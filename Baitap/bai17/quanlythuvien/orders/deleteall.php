<?php
include_once '../database.php';
$sql = "DELETE FROM `orders_detail`";
// echo $sql;
$conn->exec($sql);
//chuyen huong ve trang list.php
$sql = "DELETE FROM `orders_books`";
// echo $sql;
$conn->exec($sql);
header('location:index.php');
