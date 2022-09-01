<?php 
include_once "./../database.php"; 
?>
<?php 
global $conn;
$sql = "SELECT * FROM `product` JOIN categories 
ON product.category_id = categories.id_category";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
include_once "layout/header.php"; 
include_once "layout/sidebar.php";

 ?>
<br><br><br><br>
<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
        <div class="col-xl-3 col-md-6">
     
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
        <ul>
                   
        <li>     <a class="small text-white stretched-link" href="cate.php?id=3"><img width="290px" height="50px" src="../product/image/hang1_1629782045.png"></a>
        </li> </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                    <ul>
        <li>       <a class="small text-white stretched-link" href="cate.php?id=4"><img width="290px" height="50px" src="../product/image/hang2_1629782097.png"></a>
        </li> </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                    <ul>
        <li>        <a class="small text-white stretched-link" href="cate.php?id=1"><img width="290px" height="50px" src="../product/image/hang3_1629782127.png"></a>
        </li> </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                    <ul>
        <li>        <a class="small text-white stretched-link" href="cate.php?id=2"><img width="290px" height="50px" src="../product/image/hang4_1629782113.png"></a>
        </li> </div>
                </div>
            </ul>

            </div>
        </div> -->
        <!-- <hr> -->
        <br> <br>
        <div class="row">
        <?php foreach($rows as $key => $value){ ?>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                    <i class="test"><?php echo $value->name_product?></i>
                    </div>
                        <div style="text-align: center">
                        <ul>
        <li class="img_product"><img width="300px" height="330px" src="./../product/image/<?php echo $value->image?>"/></li></ul><br>
        <button class="button"><span><a href="dm.php?id=<?php echo $value->id_product?>"><i>Đặt Hàng Ngay</i></a><br> </span></button>
                            
                            <small><p><del><?php echo number_format($value->price + (($value->price*21)/100))." VNĐ"?></p></del></small>

                            <b><i><?php echo number_format($value->price)." VNĐ"?></i></b>
                        </div>
                </div>
            </div>
    <?php } ?>
    <?php

    
include 'layout/footer.php';
?>
    </div>
</main>
