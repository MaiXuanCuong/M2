<?php
include_once '../database.php';

$id = $_REQUEST['id'];
if (isset($_REQUEST['id'])){

// echo $id;
$sql = "DELETE FROM `books` WHERE `id_book` = $id ";
// echo $sql;
$conn->exec($sql);
//chuyen huong ve trang list.php
header('location:index.php');
} else {
    header('location:../err.php');
}