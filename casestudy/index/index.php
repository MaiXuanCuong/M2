<?php include_once "../layout/header.php";
include_once "../layout/sidebar.php";
include_once "../database.php";?>
<?php 
$sql = "SELECT * FROM `product` 
JOIN categories 
ON product.category_id = categories.id_category";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">LIBRARY</h2>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <?php if(isset($rows)) :?>
                    <?php foreach ($rows as $key => $row) { ?>
                       
                        <tbody>
                            <tr>
                                <td><?=$key +1 ?></td>
                                <td><?=$row->name_product?></td>
                                <td><?=$row->name_category?></td>
                                <td><?=number_format($row->price)." VNĐ"?></td>
                                <td><?=$row->quantity?></td>
                                <td><img src="../product/image/<?php echo $row->image?>" width="120px" height="120px" alt=""></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <?php else : echo ''; endif ;?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include_once "../layout/footer.php";?>
