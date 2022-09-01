<?php

include_once './../database.php';
global $conn;
$sql4 = "SELECT product.*, categories.name_category FROM `product` JOIN categories 
ON product.category_id = categories.id_category";
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
include_once './../layout/header.php';
include_once './../layout/sidebar.php';
?>
    
<div id="layoutSidenav_content">
<!-- <main> -->
    <div class="container-fluid px-4">
        <h1 class="mt-4">XC-SmartShop</h1><br>Điều Hành Bởi: <?php echo $rows5->AD ?> Admin
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Có <?php echo $rows->TL ;?> Thể Loại</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="./../categories/index.php">Xem Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Có <?php echo $rows1->SP ;?> Sản Phẩm</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="./../product/index.php">Xem Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">Có <?php echo ($rows3->KH - $rows5->AD) ;?> Khách Hàng</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="./../customer/index.php">Xem Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Có <?php echo $rows2->HD ;?> Đơn Đặt</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="./../order_product/index.php">Xem Chi tiết</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
          
        </div>
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
      
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Picture date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tbody>
                                <?php foreach ($rows4 as $key => $row) { ?>
                                                        <tbody>
                            <tr>
                                <td width="170px"><?=$row->id_product?></td>
                                <td><?=$row->name_product?></td>
                                <td><?=$row->name_category?></td>
                                <td><?= number_format($row->price)." VNĐ"?></td>
                                <td><img src="./../product/image/<?php echo $row->image?>" width="120px" height="120px" alt=""></td>
                               <td width="250px" >
                                    <a class="btn btn-success" href="../product/edit.php?id=<?=$row->id_product?>">Edit</a>
                                    <a class="btn btn-danger" href="../product/delete.php?id=<?=$row->id_product?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                                </td>
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