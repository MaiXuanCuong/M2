<?php
include_once '../database.php';
$sql = "DELETE FROM `orders_detail`";
$conn->exec($sql);
$sql = "DELETE FROM `order_product`";
$conn->exec($sql);
header('location:index.php');