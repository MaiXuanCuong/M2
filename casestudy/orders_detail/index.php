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
        <h2 class="mt-4"><i>Chi Tiết Đặt Hàng</i></h2>
                <a class="btn btn-success" href="<?php if(isset($_REQUEST['id'])){ echo '../order_product/index.php';} else {echo '../index/index.php';}?>"><i>Trở Về</i></a> 
<div class="row">
        <div class="col-xl-12">
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
              
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th width="200px" ><i>Khách Hàng</i></th>
                            <!-- <th width="200px" >Giới Tính</th> -->
                            <th width="200px" ><i>Địa Chỉ</i></th>
                            <th width="200px" ><i>Số ĐT</i></th>
                            <th width="200px" ><i>Sản Phẩm</i></th>
                            <th width="200px" ><i>Cấu hình</i></th>
                            <th width="200px" ><i>Màu Sắc</i></th>
                            <th width="200px" ><i>Hãng</i></th>
                            <th width="200px" ><i>Giá</i></th>
                            <th width="100px" ><i>SL</i></th>
                            <th width="200px" ><i>Tổng Tiền</i></th>
                            <th width="200px" ><i>Ngày Đặt</i></th>
                            <th width="200px" ><i>Sản Phẩm</i></th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td><i><?=$row->name_order ?></i></td>
                               
                                <td><i><?=$row->address_customer?></i></td>
                                <td><i><?=$row->phone_customer?></i></td>
                                <td><i><?=$row->name_product ?></i></td>
                                <?php $epl1=explode(';',$row->configuration_order);?>
                                <td><i><?php echo ($epl1[0]);?></i></td>
                                <td><i><?=$row->color_order ?></i></td>
                                <td><i><?=$row->name_category?></i></td>
                                <td><i><?php echo number_format($epl1[1])." VNĐ"?></i></td>
                                <td><i><?=$row->quantity_order?></td>
                                <td><i><?=number_format($row->total_price)." VNĐ"?></i></td>
                                <td><i><?=$row->date_borrow?></i></td>
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