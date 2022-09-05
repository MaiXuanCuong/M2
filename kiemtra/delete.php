<?php
include_once 'db.php';
    $id = $_REQUEST['id'];
    if (isset($_REQUEST['id'])){
    $sql = "DELETE FROM `quanlyhs` WHERE `id` = $id ";
        try {
            $conn->exec($sql);
            header("location:index.php");
        } catch (Exception $e) {
            header('location:index.php');
    }
}
?>