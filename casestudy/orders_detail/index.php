<?php include_once "./../layout/header.php";
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
}else {
    header('location:../err.php');
}
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">ORDER DETAIL</h2>
                <a class="btn btn-success" href="../order_product/index.php">BACK</a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Image</th>
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
<?php include_once "./../layout/footer.php";?>