<?php 
include_once "../database.php";

include_once "./../layout/header.php";
?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT product.*, categories.name_category FROM `product` JOIN categories 
    ON product.category_id = categories.id_category WHERE id_product = $id";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
}
// print_r ($rows);
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card mb-4">
                    <div class="container-fluid px-4">
                        <a class="btn btn-success" href="index.php">BACK</a>
                        <div style="text-align: left" class="card-header">
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
                                    </tr>
                                </thead>
                                <?php foreach ($rows as $key => $row) { ?>
                                <tbody>
                                    <tr>
                                        <td width="10px"><?=$key +1?></td>
                                        <td width="180px"><?=$row->name_product?></td>
                                        <td width="100px"><?=$row->name_category?></td>

                                  

                                        <td width="321px">
                                        <?php $explode2 = explode(';', $row->specifications );?>
                                        <?php foreach ($explode2 as $key3 => $value3){?>
                                        <?php echo "➣".$value3.'<br>';} ?>
                                    
                                    </td>

                                        <td width="320px"><?=$row->describe?></td>

                                        <td width="100px"><?= number_format($row->price)." VNĐ"?></td>
                                        <td><img src="./image/<?php echo $row->image?>" width="120px" height="120px"
                                                alt=""></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                        </main>
                    </div>
                </div>
                <?php include_once "./../layout/footer.php";?>