<?php
include_once '../database.php';


// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$id = $_REQUEST['id'];
// echo $id;
$sql = "DELETE FROM `students` WHERE `id` = $id ";
// echo $sql;
$conn->exec($sql);
//chuyen huong ve trang list.php
header('location:index.php');