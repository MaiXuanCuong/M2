<?php
include_once '../database.php';
print_r($_REQUEST);
$id = $_REQUEST['id'];
$id1 = $_REQUEST['id1'];
if (isset($_REQUEST['id']) && isset($_REQUEST['id1'])){
$sql = "DELETE FROM `orders_detail` WHERE `id_order_detail` = $id";
// echo $sql;
$conn->exec($sql);

$sql4 = "DELETE FROM orders_books WHERE id_order_book = $id1";
$conn->exec($sql4);
//chuyen huong ve trang list.php
header('location:index.php');
} else {
    header('location:../err.php');
}