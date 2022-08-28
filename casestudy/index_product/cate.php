<?php 
include_once "./../database.php"; 
include_once "layout/header.php"; 
include_once "layout/sidebar.php";?>
<?php 
global $conn;
$sql = "SELECT * FROM `product` JOIN categories 
ON product.category_id = categories.id_category";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();

$id = $_REQUEST['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST') {

}
 ?>