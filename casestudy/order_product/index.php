<?php include_once "./../layout/header.php";
include_once "../database.php";?>
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
ON product.category_id = categories.id_category";
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
                <h2 class="mt-4">Order</h2>
                <a class="btn btn-success" href="add.php?id=<?php echo $_SESSION['id_user']?>">Order</a>
                <a class="btn btn-danger" href="deleteall.php" onclick="return confirm('Bạn có chắc muốn xóa tất cả không?');">Delete ALL</a>
                <table  class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th width="200px" >Tên Khách Hàng</th>
                            <th width="200px" >Sản Phẩm</th>
                            <th width="200px" >Thể Loại</th>
                            <th width="200px" >Số Lượng</th>
                            <th width="200px" >Ảnh</th>
                            <th width="200px" >Thao Tác</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td><?=$row->name_customer?></td>
                                <td><?=$row->name_product?></td>
                                <td><?=$row->name_category?></td>
                                <td><?=$row->quantity_order?></td>    
                                <td><img src="../product/image/<?php echo $row->image ?>" width="120px" height="120px" alt=""></td>
                               <td width="250px" >
                                    <a class="btn btn-success" href="../orders_detail/index.php?id=<?=$row->id_order_product?>">Show</a>
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
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_orders_detail?>&id1=<?=$max?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
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