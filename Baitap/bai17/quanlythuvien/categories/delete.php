<?php
include_once '../database.php';


// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$id = $_REQUEST['id'];
if (isset($_REQUEST['id'])){

// echo $id;
$sql = "DELETE FROM `categories` WHERE `id` = $id ";
// echo $sql;
$conn->exec($sql);
//chuyen huong ve trang list.php
header('location:index.php');
} else {
    header('location:../err.php');
}