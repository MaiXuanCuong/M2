<?php 
include_once "../database.php";

include_once "./../layout/header.php";
?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;

$sql = "SELECT  product.*, categories.name_category FROM `product` JOIN categories 
ON product.category_id = categories.id_category WHERE product.garbage_can is NOT NULL";
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
        <a class="btn btn-primary" href="../index/index.php"><i>Trở Về</i></a>
        <!-- <h2 class="mt-4">Product</h2> -->
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
            <div class="container-fluid px-4">
                <?php if(isset($rows) && $rows != NULL){?>
                <table >
                    <thead class="thead-dark">
                        <tr>
                            <th width="100px"><i>Mã</i><hr></th>
                            <th width="280px"><i>Sản Phẩm</i><hr></th>
                            <th width="170px"><i>Danh Mục</i><hr></th>
                            <!-- <th scope="col">Cấu Hình</th> -->
                            <!-- <th scope="col">Mô Tả</th> -->
                            <th width="300px"><i>Giá</i><hr></th>
                            <th width="200px"><i>Ảnh</i><hr></th>
                            <th width="300px"><i>Thao Tác</i><hr></th>
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
                                    <a class="btn btn-success" href="recover.php?id=<?=$row->id_product?>">Lấy lại</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_product?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
                    </i><hr></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <?php } else { echo "Thùng Rác Trống!";} ?>
            </div>
        </main>
    </div>
</div>
<?php include_once "./../layout/footer.php";?>
