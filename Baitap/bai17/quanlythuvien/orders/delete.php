<?php
include_once '../database.php';

$id = $_REQUEST['id'];
if (isset($_REQUEST['id'])){

$sql = "DELETE FROM `orders_detail` WHERE `id_orders_detail` = $id";
// echo $sql;
$conn->exec($sql);
//chuyen huong ve trang list.php
header('location:index.php');
} else {
    header('location:../err.php');
}