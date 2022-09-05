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
            <br>
        <div class="row">
            <div class="col-xl-12">
            
        <!-- <h2 class="mt-4">Product</h2> -->
        <a class="btn btn-primary" href="../index/index.php"><i>Trở Về</i></a>  <a class="btn btn-success" href="add.php"><i>Thêm Sản Phẩm</i></a>
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
            <div class="container-fluid px-4">
                
                <table >
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"><i>Mã</i><hr></th>
                            <th scope="col"><i>Sản Phẩm</i><hr></th>
                            <th scope="col"><i>Danh Mục</i><hr></th>
                            <!-- <th scope="col">Cấu Hình</th> -->
                            <!-- <th scope="col">Mô Tả</th> -->
                            <th scope="col"><i>Giá</i><hr></th>
                            <th scope="col"><i>Ảnh</i><hr></th>
                            <th scope="col"><i>Thao Tác</i><hr></th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td width="100px" height="180px"><i><?=$row->id_product?></i><hr></td>
                                <td width="280px"><i><?=$row->name_product?></i><hr></td>
                                <td width="170px"><i><?=$row->name_category?></i><hr></td>
                           
                                <td width="300px"><i><?= number_format($row->price)." VNĐ"?></i><hr></td>
                                <td width="200px" ><img src="./image/<?php echo $row->image?>" width="140px" height="140px" alt=""></td>
                               <td width="300px" ><i>
                                    <a class="btn btn-success" href="show.php?id=<?=$row->id_product?>">Xem Chi Tiết</a>
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id_product?>">Sửa</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_product?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
                    </i><hr></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include_once "./../layout/footer.php";?>
