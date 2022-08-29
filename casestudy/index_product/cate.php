<?php 
include_once "./../database.php"; 
include_once "layout/header.php"; 
include_once "layout/sidebar.php";?>
<?php 
$id = $_REQUEST['id'];
global $conn;
$sql1 = "SELECT * FROM `product` JOIN categories 
ON product.category_id = categories.id_category WHERE category_id = $id";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
}
?>
<br><br><br><br>
<div id="layoutSidenav_content">
<!-- <main> -->
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
        <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="cate.php?id=3"><img width="290px" height="50px" src="../product/image/hang1_1629782045.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="cate.php?id=4"><img width="290px" height="50px" src="../product/image/hang2_1629782097.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="cate.php?id=1"><img width="290px" height="50px" src="../product/image/hang3_1629782127.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="cate.php?id=2"><img width="290px" height="50px" src="../product/image/hang4_1629782113.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
        <?php foreach($rows1 as $key => $value){ ?>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                    <p class="test">Sản Phẩm HOT</p>
                    </div>
                        <div style="text-align: center">
                            <img width="300px" height="330px" src="../product/image/<?php echo $value->image?>"/><br>
                            <a href="dm.php?id=<?php echo $value->id_product?>"><?php echo $value->name_product?></a><br>
                            <p><?php echo number_format($value->price)." VNĐ"?></p>
                        </div>
                </div>
            </div>
    <?php } ?>
    <?php
include 'layout/footer.php';
?>
    </div>
</main>
