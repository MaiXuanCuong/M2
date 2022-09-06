<?php

include_once "../database.php";?>
<?php
if(isset($_SESSION['id_user'])){
    $id1 = $_SESSION['id_user'];

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
// include_once "./../index_product/layout/sidebar.php";
?>


          
    <div id="layoutSidenav_content">
 
        <main><br><br><br>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    &nbsp;&nbsp;&nbsp;<div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" method="post" action="../index_product/search_lichsu.php">
        <input class="form-control me-2" name="search" type="search" placeholder="Tìm Kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm&nbsp;Kiếm</button><br>
        <span><?php if(isset($err['search'])){echo $err['search'];} ?></span>
      </form>
    </div>
  </div>
</nav>
        <button class="button"><span><i><a href="<?php if(isset($_REQUEST['id_user'])){ echo '../index_product/index.php';} else {echo '../index_product/index.php';}?>">Trở Về</a></span></i></button>


<div class="row">

        <div class="col-xl-12">

                <div class="card mb-4">

                    <div  style="text-align: center" class="card-header">
                <h2 class="mt-4"><i>Lịch Sử Mua Hàng</i><hr></h2>
                <table >
                    <thead class="thead-dark">
                        <tr>
                            <th width="200px" ><i>Người Mua</i><hr></th>
                            <th width="200px" ><i>Sản Phẩm</i><hr></th>
                            <th width="200px" ><i>Cấu hình</i><hr></th>
                            <th width="200px" ><i>Màu Sắc</i><hr></th>
                            <th width="200px" ><i>Hãng</i><hr></th>
                            <th width="200px" ><i>Giá</i><hr></th>
                            <th width="50px" ><i>SL</i><hr></th>
                            <th width="200px" ><i>Tổng Tiền</i><hr></th>
                            <th width="200px" ><i>Ngày Đặt</i><hr></th>
                            <th width="200px" ><i>Sản Phẩm</i><hr></th>
                            <th width="200px" ><i>Mua Lại</i><hr></th>
                            <th width="200px" ><i>Hủy Đơn</i><hr></th>
                        </tr>



                    </thead>
                    <?php foreach ($rows1 as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td><i><?=$row->name_order ?></i></td>
                                <td><i><?=$row->name_product ?></i></td>
                                <?php $epl1=explode(';',$row->configuration_order);?>
                                <td><i><?php echo ($epl1[0]);?></i></td>
                                <td><i><?=$row->color_order ?></i></td>
                                <td><i><?=$row->name_category?></i></td>
                                <td><i><?php echo number_format($epl1[1])." VNĐ"?></i></td>
                                <td><i><?=$row->quantity_order?></i></td>
                                <td><i><?=number_format($row->total_price)." VNĐ"?></i></td>
                                
                                <td><i><?=$row->date_borrow?></i></td>
                                <td><img src="../product/image/<?php echo $row->image?>" width="120px" height="120px" alt=""></td>
                                <td width="100px"><i><a class="button" href="../index_product/dm.php?id=<?php echo $row->id_product;?>">Mua Lại</a></i></td>
                                <td width="100px"><i><a class="button" onclick="return confirm('Bạn có chắc muốn xóa <?=$row->name_product?> không?');" href="huydon.php?id=<?php echo $row->id_orders_detail;?>&id1=<?php echo $row->id_customer;?>">Hủy Đơn</a></i></td>
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