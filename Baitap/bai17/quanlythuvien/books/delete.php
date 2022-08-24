<?php
include_once '../database.php';

$id = $_REQUEST['id'];
if (isset($_REQUEST['id'])){

// echo $id;
$sql = "DELETE FROM `books` WHERE `id_book` = $id ";
// echo $sql;
try {
   
 
    $conn->exec($sql);
 header("location:index.php");

} catch (Exception $e) {
    // echo 'Message: ' . $e->getMessage();
    header('location:../err.php');
}
}
// $conn->exec($sql);


// //chuyen huong ve trang list.php
// header('location:index.php');
// } else {
//     header('location:../err.php');
// }