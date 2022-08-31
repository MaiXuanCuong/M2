<?php

include_once "../database.php";?>
<?php
if(isset($_REQUEST['id_user'])){
    $id1 = $_REQUEST['id_user'];

    $sql1 = "SELECT * FROM `orders_detail` 
    JOIN product 
    ON product.id_product = orders_detail.product_id 
    JOIN order_product 
    ON orders_detail.order_product_id = order_product.id_order_product 
    JOIN customer 
    ON order_product.customer_id = customer.id_customer
    JOIN categories 
    ON product.category_id = categories.id_category 
    WHERE customer.id_customer = $id1
    ORDER BY date_borrow DESC
   ";
    $stmt1 = $conn->query($sql1);
    $stmt1->setFetchMode(PDO::FETCH_OBJ);
    $rows1 = $stmt1->fetchAll();
}
else {
    header('location:../index_product/index.php');
}
include_once "./../index_product/layout/header.php";
include_once "./../index_product/layout/sidebar.php";
?>


          
    <div id="layoutSidenav_content">
        <main>
        <a class="btn btn-success" href="<?php if(isset($_REQUEST['id_user'])){ echo '../index_product/index.php';} else {echo '../index_product/index.php';}?>">BACK</a>

<div class="row">
        <div class="col-xl-12">
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
                <h2 class="mt-4">Lịch Sử Mua Hàng</h2>
                <table class="table table-bordered" >
                    <thead class="thead-dark">
                        <tr>
                            <th width="200px" >Sản Phẩm</th>
                            <th width="200px" >Cấu hình</th>
                            <th width="200px" >Màu Sắc</th>
                            <th width="200px" >Hãng</th>
                            <th width="200px" >Giá</th>
                            <th width="200px" >Số Lượng</th>
                            <th width="200px" >Tổng Tiền</th>
                            <th width="200px" >Ngày Đặt</th>
                            <th width="200px" >Sản Phẩm</th>
                        </tr>



                    </thead>
                    <?php foreach ($rows1 as $key => $row) { ?>
                        <tbody>
                            <tr>
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
        </main>
    </div>
</div>
</div>
</div>
<?php include_once "./../layout/footer.php";?>