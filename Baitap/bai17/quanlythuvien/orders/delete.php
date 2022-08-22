<?php
include_once '../database.php';

$id = $_REQUEST['id'];
if (isset($_REQUEST['id'])){
    $sql4 = "SELECT * FROM `orders_detail` WHERE `id_orders_detail` = $id ";
    $stmt4 = $conn->query($sql4);
    $stmt4->setFetchMode(PDO::FETCH_OBJ);
    $rows4 = $stmt4->fetch();
    $id1 = $rows4->orders_book_id;
$sql = "DELETE FROM `orders_detail` WHERE `id_order_detail` = $id";
// echo $sql;
$conn->exec($sql);
if (isset($id1)){
$sql4 = "DELETE FROM orders_books WHERE id_order_book = $id1";
$conn->exec($sql4);
} else {
    echo $id1;
}
//chuyen huong ve trang list.php
header('location:index.php');
} else {
    header('location:../err.php');
}