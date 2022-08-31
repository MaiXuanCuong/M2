<?php

include_once "../database.php";?>
<?php

if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];
global $conn;
$sql = "SELECT * FROM `orders_detail` 
JOIN product 
ON product.id_product = orders_detail.product_id 
JOIN order_product 
ON orders_detail.order_product_id = order_product.id_order_product 
JOIN customer 
ON order_product.customer_id = customer.id_customer
JOIN categories 
ON product.category_id = categories.id_category WHERE orders_detail.order_product_id= $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
}else if (!isset($_REQUEST['id'])){
    $sql = "SELECT * FROM `orders_detail` 
JOIN product 
ON product.id_product = orders_detail.product_id 
JOIN order_product 
ON orders_detail.order_product_id = order_product.id_order_product 
JOIN customer 
ON order_product.customer_id = customer.id_customer
JOIN categories 
ON product.category_id = categories.id_category";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
}
else {
    header('location:../err.php');
}
include_once "./../layout/header.php";
include_once "./../layout/sidebar.php";
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
        <h2 class="mt-4">ORDER DETAIL</h2>
                <a class="btn btn-success" href="<?php if(isset($_REQUEST['id'])){ echo '../order_product/index.php';} else {echo '../index/index.php';}?>">BACK</a> 
<div class="row">
        <div class="col-xl-12">
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
              
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th width="200px" >Kh Hàng</th>
                            <th width="200px" >Giới Tính</th>
                            <th width="200px" >Địa Chỉ</th>
                            <th width="200px" >Số ĐT</th>
                            <th width="200px" >Sản Phẩm</th>
                            <th width="200px" >Cấu hình</th>
                            <th width="200px" >Màu Sắc</th>
                            <th width="200px" >Hãng</th>
                            <th width="200px" >Giá</th>
                            <th width="100px" >SL</th>
                            <th width="200px" >Tổng Tiền</th>
                            <th width="200px" >Ngày Đặt</th>
                            <th width="200px" >Sản Phẩm</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td><?=$row->name_customer ?></td>
                                <td><?=$row->gender_customer?></td>
                                <td><?=$row->address_customer?></td>
                                <td><?=$row->phone_customer?></td>
                                <td><?=$row->name_product ?></td>
                                <td><?=$row->configuration_order ?></td>
                                <td><?=$row->color_order ?></td>
                                <td><?=$row->name_category?></td>
                                <td><?=number_format($row->price)." VNĐ"?></td>
                                <td><?=$row->quantity_order?></td>
                                <td><?=number_format($row->total_price)." VNĐ"?></td>
                                <td><?=$row->date_borrow?></td>
                                <td><img src="../product/image/<?php echo $row->image?>" width="120px" height="120px" alt=""></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>
</div>
<?php include_once "./../layout/footer.php";?>