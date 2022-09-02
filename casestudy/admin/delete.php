<?php
include_once '../database.php';
$id = $_REQUEST['id']; 
if (isset($_REQUEST['id'])){
    $sql = "DELETE FROM `customer` WHERE `id_customer` = $id ";
    try {
        $conn->exec($sql);
     header("location:index.php");
    } catch (Exception $e) {
        header('location:../error/404.php');
    }
}
