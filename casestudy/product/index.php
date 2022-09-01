<?php 
include_once "../database.php";

include_once "./../layout/header.php";
?>
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
        
        <!-- <main> -->
        <div class="row">
            
        <div class="col-xl-12">
        <!-- <h2 class="mt-4">Product</h2> -->
                <a class="btn btn-success" href="add.php">Add Product</a>
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
            <div class="container-fluid px-4">
                
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Mã</th>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Danh Mục</th>
                            <!-- <th scope="col">Cấu Hình</th> -->
                            <!-- <th scope="col">Mô Tả</th> -->
                            <th scope="col">Giá</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Thao Tác</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td width="100px"><?=$row->id_product?></td>
                                <td width="250px"><?=$row->name_product?></td>
                                <td width="150px"><?=$row->name_category?></td>
                           
                                <td width="260px"><?= number_format($row->price)." VNĐ"?></td>
                                <td ><img src="./image/<?php echo $row->image?>" width="140px" height="120px" alt=""></td>
                               <td width="280px" >
                                    <a class="btn btn-success" href="show.php?id=<?=$row->id_product?>">Show</a>
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
