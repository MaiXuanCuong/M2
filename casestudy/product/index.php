<?php include_once "./../layout/header.php";
include_once "../database.php";?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;
$sql = "SELECT product.*, categories.name_category FROM `product` JOIN categories 
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
                <h2 class="mt-4">Product</h2>
                <a class="btn btn-success" href="add.php">Add Product</a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Mã</th>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Danh Mục</th>
                            <th scope="col">Cấu Hình</th>
                            <th scope="col">Mô Tả</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Thao Tác</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td width="10px"><?=$row->id_product?></td>
                                <td width="100px"><?=$row->name_product?></td>
                                <td width="95px"><?=$row->name_category?></td>
                                <td><?=$row->specifications?></td>
                                <td><?=$row->describe?></td>
                                <td><?= number_format($row->price)." VNĐ"?></td>
                                <td><img src="./image/<?php echo $row->image?>" width="120px" height="120px" alt=""></td>
                               <td width="40px" >
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id_product?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_product?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
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