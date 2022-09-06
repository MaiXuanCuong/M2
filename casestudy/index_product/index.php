<?php 
include_once "./../database.php"; 
?>
<?php 
global $conn;
if(isset($_SESSION['id_user'])){

    $id = $_SESSION['id_user'];
    $sql1 = "SELECT COUNT(orders_detail.id_orders_detail) as DH, customer.id_customer as ID FROM categories 
INNER JOIN product ON product.category_id = categories.id_category 
INNER JOIN orders_detail ON product.id_product = orders_detail.product_id 
INNER JOIN order_product ON orders_detail.order_product_id = order_product.id_order_product
INNER JOIN customer ON customer.id_customer = order_product.customer_id WHERE product.quantity > 0  && customer.id_customer = $id
GROUP BY orders_detail.id_orders_detail";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetch();
}
$sql = "SELECT * FROM `product` JOIN categories 
ON product.category_id = categories.id_category WHERE product.quantity > 0 && product.garbage_can is NULL";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();


include_once "layout/header.php"; 
include_once "layout/sidebar.php";

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
// $search = $_REQUEST['search'] ;

// $err = [];
// if(empty($search)){
//     $err["search"] = 'Vui Lòng Nhập Dữ Liệu TÌm Kiếm';
// }
// if(empty($err)){
// $sql1 = "SELECT * FROM `product` WHERE `name_product` JOIN categories 
// ON product.category_id = categories.id_category LIKE '%$search%'";
// $stmt1 = $conn->query($sql1);
// $stmt1->setFetchMode(PDO::FETCH_OBJ);
// $rows1 = $stmt1->fetchAll();
// }
// }
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$cart = $_REQUEST['cart'];
$err =[];
if(empty($cart)){
    $err["cart"] = 'loi';
}
if(empty($err)){
    $sql1 = "UPDATE `product` SET cart = $cart WHERE `id_product` = $cart";
    $conn->exec($sql1);
    // header('location:../index/index.php');
}
}
 ?>
<br><br><br><br>
<div id="layoutSidenav_content">
    <div style="text-align: center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            &nbsp;&nbsp;&nbsp;<div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex" method="post" action="search.php">
                        <input class="form-control me-2" name="search" type="search" placeholder="Tìm Kiếm"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm&nbsp;Kiếm</button><br>
                        <span><?php if(isset($err['search'])){echo $err['search'];} ?></span>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div style="background-color: #FFFAFA" class="container-fluid px-4">
        <br>
        <div class="row">
            <?php foreach($rows as $key => $value){ ?>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                        <b><i><?php echo $value->name_product?></i></b>
                    </div>
                    <div class="sanPham" style="text-align: center">

                        <a href="dm.php?id=<?php echo $value->id_product?>"><img width="300px" height="330px"
                                src="./../product/image/<?php echo $value->image?>" /></a>
                        </><br>
                         
                        <button class="button"><span><a href="dm.php?id=<?php echo $value->id_product?>"><i>Đặt Hàng
                                        Ngay</i></a><br> </span></button>
                                        <form action="" method="post">
                       
                        <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>     
                            <button onclick="return alert('Đã Thêm Vào Giỏ Hàng');" name="cart" value="<?php echo $value->id_product?>" class="themvaogio">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </form>
                        <br>
                        <small>
                            <del><?php echo number_format($value->price + (($value->price*21)/100))." VNĐ"?>
                            </del><br>
                        </small>

                        <b><i><?php echo number_format($value->price)." VNĐ"?></i></b>
                        <i><br><b style="font-size:12px ; color:orange">
                                <h5 style="color:red">Tặng</h5> Bảo Hành Vip bao gồm Nguồn-Màn Hình-Vân Tay
                            </b></i><br>
                            <i class='fas fa-shipping-fast'></i>
                            <?php  if (!isset($rows1->DH)) {?>
                           <small> <b><i style="color:blue">Miễn Phí Vẫn Chuyển Cho Đơn hàng Đầu Tiên</i></b></small>
                            <?php } else { ?>
                                <small> <b> <i style="color:blue"><?php echo 'Giảm 30% Phí Vẫn Chuyển Cho Đơn Hàng Tiếp Theo'; }?></i></b></small>
                    </div>
                </div>

            </div>

            <?php } ?>
            <?php

    
include 'layout/footer.php';
?>
        </div>
        </main>