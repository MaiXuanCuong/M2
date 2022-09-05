<?php 
include_once "./../database.php"; 
?>
<?php 
global $conn;
// $sql = "SELECT * FROM `product` JOIN categories 
// ON product.category_id = categories.id_category";
// $stmt = $conn->query($sql);
// $stmt->setFetchMode(PDO::FETCH_OBJ);
// $rows = $stmt->fetchAll();
include_once "layout/header.php"; 
include_once "layout/sidebar.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$search = $_REQUEST['search'] ;

$err = [];
if(empty($search)){
    $err["search"] = 'Vui Lòng Nhập Dữ Liệu TÌm Kiếm';
}
if(empty($err)){
$sql1 = "SELECT * FROM `product` JOIN categories 
ON product.category_id = categories.id_category WHERE (name_product LIKE '%$search%' OR name_category LIKE '%$search%' OR price LIKE '%$search%') && product.garbage_can is NULL";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
}
}
 ?>
<br><br><br><br>
<div id="layoutSidenav_content">
    <div  style="text-align: center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" method="post" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Tìm Kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm&nbsp;Kiếm</button><br>
        <span><?php if(isset($err['search'])){echo $err['search'];} ?></span>
      </form>
    </div>
  </div>
</nav>

    </div>
    <div style="background-color: #FFFAFA" class="container-fluid px-4">
    <br>
        <div class="row">
            <?php if(isset($rows1)){foreach($rows1 as $key => $value){ ?>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                        <i class="test"><?php echo $value->name_product?></i>
                    </div>
                    <div style="text-align: center">
                        <ul>
                            <li class="img_product"><img width="300px" height="330px"
                                    src="./../product/image/<?php echo $value->image?>" /></li>
                        </ul><br>
                        <button class="button"><span><a href="dm.php?id=<?php echo $value->id_product?>"><i>Đặt Hàng
                                        Ngay</i></a><br> </span></button>

                    <small>
                            <p><del><?php echo number_format($value->price + (($value->price*21)/100))." VNĐ"?></p>
                            </del>
                        </small>

                        <b><i><?php echo number_format($value->price)." VNĐ"?></i></b>
                        <i><br><b style="font-size:12px ; color:orange">
                                <h5 style="color:red">Tặng</h5> Bảo Hành Vip bao gồm Nguồn-Màn Hình-Vân Tay
                            </b></i>
                    </div>
                </div>
            </div>
            <?php } } ?>
            <?php

    
include 'layout/footer.php';
?>
        </div>
        </main>