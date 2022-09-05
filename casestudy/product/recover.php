<?php 
include_once "../database.php";
global $conn;
if(isset($_REQUEST['id']) && $_REQUEST['id'] != NULL){
    $id = $_REQUEST['id'];
  
    $sql = "UPDATE `product` SET `garbage_can`= NULL WHERE `id_product` = '$id'";
    $conn->exec($sql);
    header('location:Garbage_can.php');
} else{
    header('location:index.php');
}