<?php 
include_once "../database.php";
global $conn;
if(isset($_REQUEST['id']) && $_REQUEST['id'] != NULL){
    $id = $_REQUEST['id'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
        $borrow = date("Y-m-d H:i:s");
    $sql = "UPDATE `product` SET `garbage_can`='$borrow' WHERE `id_product` = '$id'";
    $conn->exec($sql);
    header('location:../index/index.php');
} else{
    header('location:../index/index.php');
}