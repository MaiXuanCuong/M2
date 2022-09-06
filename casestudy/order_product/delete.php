<?php
include_once '../database.php';
// print_r($_REQUEST);
$id = $_REQUEST['id'];
$id1 = $_REQUEST['id1'];
if (isset($_REQUEST['id']) && isset($_REQUEST['id1'])){
$sql = "DELETE FROM `orders_detail` WHERE `id_orders_detail` = $id";
$conn->exec($sql);
$sql4 = "DELETE FROM order_product WHERE id_order_product = $id1";
$conn->exec($sql4);
header('location:index.php');
} else {
    header('location:../error/404.php');
}