<?php
include_once '../database.php';


// echo '<pre>';
// print_r($_REQUEST);
// die();
//
$id = $_REQUEST['id']; 
if (isset($_REQUEST['id'])){

    // echo $id;
    $sql = "DELETE FROM `students` WHERE `id_student` = $id ";
    // echo $sql;
    try {
   
 
        $conn->exec($sql);
     header("location:index.php");
    
    } catch (Exception $e) {
        // echo 'Message: ' . $e->getMessage();
        header('location:../err.php');
    }
}
//     $conn->exec($sql);
//     //chuyen huong ve trang list.php
//     header('location:index.php');
// }
// else{
//     header('location:../err.php');

// }