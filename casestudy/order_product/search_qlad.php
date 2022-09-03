<?php 
include_once "./../database.php"; ?>
<?php 
global $conn;
include_once "../layout/header.php"; 
include_once "../layout/sidebar.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$search = $_REQUEST['search'] ;
}
$err = [];
if(empty($search)){
    $err["search"] = 'Vui Lòng Nhập Dữ Liệu TÌm Kiếm';
}
if(empty($err)){
    $sql1 = "SELECT * FROM `orders_detail` 
    JOIN product 
    ON product.id_product = orders_detail.product_id 
    JOIN order_product 
    ON orders_detail.order_product_id = order_product.id_order_product 
    JOIN customer 
    ON order_product.customer_id = customer.id_customer
    JOIN categories 
    ON product.category_id = categories.id_category 
    WHERE name_product LIKE '%$search%' OR name_order LIKE '%$search%'  OR name_category LIKE '%$search%' OR quantity_order LIKE '%$search%' OR YEAR(date_borrow) LIKE '%$search%' OR MONTH(date_borrow) LIKE '%$search%' OR DAY(date_borrow) LIKE '%$search%'";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
}



 ?>
<br><br><br><br>
<div id="layoutSidenav_content">
    <div  style="text-align: center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" method="post" action="">
        <input class="form-control me-2" name="search" type="search" placeholder="Tìm Kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm&nbsp;Kiếm</button><br>
        <span><?php if(isset($err['search'])){echo $err['search'];} ?></span>
      </form>
    </div>
  </div>
</nav>
<main>
    <?php if($_REQUEST['search'] != null){ ?>
            <div class="container-fluid px-4">
            <h2 style="text-align: left" class="mt-4"><i>Đơn Đặt</i><br> <a  class="btn btn-danger" href="deleteall.php" onclick="return confirm('Bạn có chắc muốn xóa tất cả không?');"><i>Xóa Tất Cả</i></a></h2>
               

<div class="row">
        <div class="col-xl-12">
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
               
                <table  >
                    <thead class="thead-dark">
                        <tr>
                            <th width="230px" ><i>Khách Hàng</i><hr></th>
                            <th width="230px" ><i>Sản Phẩm</i><hr></th>
                            <th width="230px" ><i>Thể Loại</i><hr></th>
                            <th width="230px" ><i>Số Lượng</i><hr></th>
                            <th width="230px" ><i>Ảnh</i><hr></th>
                            <th width="230px" ><i>Thao Tác</i><hr></th>
                        </tr>
                    </thead>
                    <?php foreach ($rows1 as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td><i><?php if($row->name_customer == $row->name_order){ echo $row->name_customer; } else { echo 'Tài Khoản: '.$row->name_customer.'<br>'.'Đặt Hộ: '.$row->name_order; } ?></i></td>
                                <td><i><?=$row->name_product?></i></td>
                                <td><i><?=$row->name_category?></i></td>
                                <td><i><?=$row->quantity_order?></i></td>    
                                <td><img src="../product/image/<?php echo $row->image ?>" width="120px" height="120px" alt=""><br><br></td>
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
<?php } ?>
<?php include_once "../layout/footer.php";?>