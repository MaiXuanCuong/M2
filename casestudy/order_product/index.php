<?php
include_once "../database.php";

include_once "./../layout/header.php";
?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;
$sql = "SELECT  * FROM `order_product` 
JOIN orders_detail
ON orders_detail.order_product_id = order_product.id_order_product 
JOIN product 
ON product.id_product = orders_detail.product_id 
JOIN customer 
ON order_product.customer_id = customer.id_customer 
JOIN categories 
ON product.category_id = categories.id_category
ORDER BY date_borrow DESC";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// echo '<pre>';
// print_r ($rows);
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
            <h2 class="mt-4"><i>Đơn Đặt</i></h2>
                <!-- <a class="btn btn-success" href="add.php?id=<?php //echo $_SESSION['id_admin']?>">Thêm Đơn</a> -->
                <a class="btn btn-danger" href="deleteall.php" onclick="return confirm('Bạn có chắc muốn xóa tất cả không?');"><i>Xóa Tất Cả</i></a>

<div class="row">
        <div class="col-xl-12">
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
               
                <table  class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th width="230px" ><i>Khách Hàng</i></th>
                            <th width="230px" ><i>Sản Phẩm</i></th>
                            <th width="230px" ><i>Thể Loại</i></th>
                            <th width="230px" ><i>Số Lượng</i></th>
                            <th width="230px" ><i>Ảnh</i></th>
                            <th width="230px" ><i>Thao Tác</i></th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td><i><?php if($row->name_customer == $row->name_order){ echo $row->name_customer; } else { echo 'Tài Khoản: '.$row->name_customer.'<br>'.'Đặt Hộ: '.$row->name_order; } ?></i></td>
                                <td><i><?=$row->name_product?></i></td>
                                <td><i><?=$row->name_category?></i></td>
                                <td><i><?=$row->quantity_order?></i></td>    
                                <td><img src="../product/image/<?php echo $row->image ?>" width="120px" height="120px" alt=""></td>
                               <td width="250px" >
                                    <a class="btn btn-success" href="../orders_detail/index.php?id=<?=$row->id_order_product?>"><i>Xem Chi Tiết</i></a>
                                    <?php $sql4 = "SELECT id_order_product FROM `order_product`";
                                        $stmt4 = $conn->query($sql4);
                                        $stmt4->setFetchMode(PDO::FETCH_OBJ);
                                        $rows4 = $stmt4->fetchAll();
                                        $max=0;
                                        foreach ($rows4 as $key0 => $row0){
                                            if($row0->id_order_product == $row->id_orders_detail){
                                                $max =$row0->id_order_product;
                                            }
                                        } ?>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_orders_detail?>&id1=<?=$max?>" onclick="return confirm('Bạn có chắc muốn xóa không?');"><i>Xóa</i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include_once "./../layout/footer.php";?>