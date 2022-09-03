<?php 
include_once "./../database.php"; 
global $conn;
    $id = $_REQUEST['id'];
    $err =[];
    if(empty($id)){
        $err["cart"] = 'loi';
    }
    if(empty($err)){
        $sql1 = "UPDATE `product` SET cart = NULL WHERE `id_product` = $id";
        $conn->exec($sql1);
        header("location:cart.php");
    }
?>