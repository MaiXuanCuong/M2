<?php 
include_once "../database.php";

include_once "./../layout/header.php";
?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;
if(isset($_REQUEST['id']) && $_REQUEST['id'] != NULL){
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
                        <a class="btn btn-success" href="index.php"><i>Trở về</i></a>
                        <div style="text-align: left" class="card-header">
                        <?php if(isset($rows)) {?>
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><i>Mã</i></th>
                                        <th scope="col"><i>Sản Phẩm</i></th>
                                        <th scope="col"><i>Danh Mục</i></th>
                                        <th scope="col"><i>Cấu Hình</i></th>
                                        <th scope="col"><i>Mô Tả</i></th>
                                        <th scope="col"><i>Giá</i></th>
                                        <th scope="col"><i>Ảnh</i></th>
                                    </tr>
                                </thead>
                                <?php foreach ($rows as $key => $row) { ?>
                                <tbody>
                                    <tr>
                                        <td width="10px"><i><?=$key +1?></i></td>
                                        <td width="180px"><i><?=$row->name_product?></i></td>
                                        <td width="100px"><i><?=$row->name_category?></i></td>

                                  

                                        <td width="425px">
                                        <?php $explode2 = explode(';', $row->specifications );?>
                                        <?php foreach ($explode2 as $key3 => $value3){?>
                                            <i><?php echo "➣".$value3.'<br>';} ?></i>
                                    
                                    </td>

                                        <td width="400px"><i><?=$row->describe?></i></td>

                                        <td width="100px"><i><?= number_format($row->price)." VNĐ"?></i></td>
                                        <td><img src="./image/<?php echo $row->image?>" width="120px" height="120px"
                                                alt=""></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                            <?php } ?>

                        </div>
                        </main>
                    </div>
                </div>
                <?php include_once "./../layout/footer.php";?>