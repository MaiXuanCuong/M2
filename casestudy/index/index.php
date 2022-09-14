<?php

include_once './../database.php';
global $conn;
$sql4 = "SELECT product.*, categories.name_category FROM `product` JOIN categories 
ON product.category_id = categories.id_category WHERE product.garbage_can is NULL
ORDER BY price DESC";
$stmt4 = $conn->query($sql4);
$stmt4->setFetchMode(PDO::FETCH_OBJ);
$rows4 = $stmt4->fetchAll();

$sql = "SELECT COUNT(id_category) as TL FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetch();
// print_r ($rows);
$sql1 = "SELECT COUNT(id_product) as SP FROM product";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetch();
// print_r ($rows);
$sql2 = "SELECT COUNT(id_order_product) as HD FROM order_product";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
$rows2 = $stmt2->fetch();
// print_r ($rows);
$sql3 = "SELECT COUNT(id_customer) as KH FROM customer";
$stmt3 = $conn->query($sql3);
$stmt3->setFetchMode(PDO::FETCH_OBJ);
$rows3 = $stmt3->fetch();

$sql5 = "SELECT COUNT(`role`) as AD FROM customer WHERE `role`='Admin'";
$stmt5 = $conn->query($sql5);
$stmt5->setFetchMode(PDO::FETCH_OBJ);
$rows5 = $stmt5->fetch();
include_once '../layout/header.php';
include_once '../layout/sidebar.php';
?>
    
<div id="layoutSidenav_content">
<!-- <main> -->
    <div class="container-fluid px-4">
        <h1 class="mt-4"><img width="50px" height="55px" src="../product/image/zyro-image.png"><i>XC-SmartShop</h1><br><a style="text-decoration: none; color:black" href="../admin/index.php">Điều Hành Bởi: <?php echo $rows5->AD ?> Admin</i></a>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <br>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"><i>Có <?php echo $rows->TL ;?> Thể Loại</i></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a style="text-decoration: none" class="small text-white stretched-link" href="./../categories/index.php"><i>Xem Chi tiết</i></a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body"><i>Có <?php echo $rows1->SP ;?> Sản Phẩm</i></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a style="text-decoration: none" class="small text-white stretched-link" href="./../product/index.php"><i>Xem Chi tiết</i></a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body"><i>Có <?php echo ($rows3->KH - $rows5->AD) ;?> Khách Hàng</i></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a style="text-decoration: none" class="small text-white stretched-link" href="./../customer/index.php"><i>Xem Chi tiết</i></a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body"><i>Có <?php echo $rows2->HD ;?> Đơn Đặt</i></div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a style="text-decoration: none" class="small text-white stretched-link" href="./../order_product/index.php"><i>Xem Chi tiết</i></a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
          
        </div>
        <br>  <br>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <!-- <i class="fas fa-chart-area me-1"></i> -->
                        Area Chart Example
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <!-- <i class="fas fa-chart-bar me-1"></i> -->
                        Bar Chart Example
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
      <br>  <br>  <br>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" method="post" action="search_sp.php">
        <input class="form-control me-2" name="search" type="search" placeholder="Tìm Kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm&nbsp;Kiếm</button><br>
        <span><?php if(isset($err['search'])){echo $err['search'];} ?></span>
      </form>
    
    </div>
   
    <a style="color:black; text-decoration: none" href="../product/Garbage_can.php"> <button type="button" class="btn btn-primary">Thùng Rác<svg style="color:white; font-size:20px" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></button></a>
  </div>
</nav>
            <div style="text-align: center" class="card-body">
                <table >
                    <thead>
                        <tr>
                            <th width="100px" ><i>STT</i><hr></th>
                            <th width="300px"><i>Sản Phẩm</i><hr></th>
                            <th width="200px"><i>Danh Mục</i><hr></th>
                            <th width="400px"><i>Giá</i><hr></th>
                            <th width="300px"><i>Ảnh Sản Phẩm</i><hr></th>
                            <th><i>Thao Tác</i><hr></th>
                        </tr>
                    </thead>
                 
                    <tbody>
                                <?php foreach ($rows4 as $key => $row) { ?>
                                                        <tbody>
                            <tr>
                                <td ><i><?= $key +1?></i><hr></td>
                                <td><i><?=$row->name_product?></i><hr></td>
                                <td><i><?=$row->name_category?></i><hr></td>
                                <td><i><?= number_format($row->price)." VNĐ"?></i><hr></td>
                                <td><img src="./../product/image/<?php echo $row->image?>" width="120px" height="120px" alt=""></td>
                               <td width="250px" ><i>
                                    <a class="btn btn-success" href="../product/edit.php?id=<?=$row->id_product?>">Sửa</a>
                                    <a class="btn btn-danger" href="../product/Garbage.php?id=<?=$row->id_product?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
                                    </i><hr></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
include './../layout/footer.php';
?>