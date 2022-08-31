<?php 
include_once "./../database.php"; 
include_once "layout/header.php"; 
include_once "layout/sidebar.php";
?>

<?php 

// print_r($_SESSION);
// die();
if(isset( $_SESSION['quantity'] ) && $_SESSION['id_product']){
    $quantity = $_SESSION['quantity'] ; 
    $id = $_SESSION['id_user'];
    $color  =  $_SESSION['color'];
    $configuration  = $_SESSION['configuration'];
    $quantity  = $_SESSION['quantity'];
    $id_prd =  $_SESSION['id_product'];

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_REQUEST['name'] ;
    $phone = $_REQUEST['phone'];
    $city = $_REQUEST['city'];
    $district = $_REQUEST['district'];
    $ward = $_REQUEST['ward'];
    $address = $_REQUEST['address'];
    $address1 = "Tỉnh/Thành Phố: ".$city." Quận/Huyện: ".$district." Xã/Phường ".$ward;
    $notes = $_REQUEST['notes'];
    if($notes == ''){
        $notes = "Not Notes";
    }
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $borrow = date("Y-m-d H:i:s");
    $err=[];
    if ($name==''){
        $err['name']='Bạn không thể để trống mục số lượng!';
    }
    if ($phone==''){
        $err['phone']='Bạn không thể để trống mục số lượng!';
    }
    if ($city==''){
        $err['city']='Bạn không thể để trống mục số lượng!';
    }
    if ($district==''){
        $err['district']='Bạn không thể để trống mục số lượng!';
    }
    if ($ward==''){
        $err['ward']='Bạn không thể để trống mục số lượng!';
    }
    if ($address==''){
        $err['address']='Bạn không thể để trống mục số lượng!';
    }
    if ($quantity==''){
        $err['quantity']='Bạn không thể để trống mục số lượng!';
    }

if(empty($err))
{
    $sql = "UPDATE customer SET `name_customer`='$name' , `address_customer` ='$address1' , `phone_customer` ='$phone' WHERE id_customer = $id ";
    $conn->query($sql);

    $sql1 = "INSERT INTO `order_product` 
    (`customer_id`,`date_borrow`,`quantity_order`,`note`,`delivery_address`) 
    VALUES 
    ($id,'$borrow','$quantity','$notes','$address')"
    ;
    $conn->exec($sql1);
    $sql2 = "SELECT id_order_product FROM `order_product`";
    $stmt2 = $conn->query($sql2);
    $stmt2->setFetchMode(PDO::FETCH_OBJ);
    $rows2 = $stmt2->fetchAll();
    $max=0;
// print_r ($rows4);
// die();
foreach ($rows2 as $key0 => $row0){
    if($row0->id_order_product> $max){
        $max =$row0->id_order_product;
    }
}
// print_r ($max);
// die();
$sql1 = "SELECT * FROM product WHERE id_product = $id_prd ";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetch();

$total1 = ($quantity * $rows1->price);
$sql = "INSERT INTO `orders_detail` 
            (`order_product_id`,`product_id`,`total_price`) 
            VALUES 
            ('$max','$id_prd','$total1')";
    $conn->exec($sql);
    
    // header('location:dm.php');
}
}

?>
<div id="layoutSidenav_content">
    <div class="container">
        <br>
        <div style="text-align:center">
            <b style="font-size:200%; color:orange "><i>Thông Tin Mua Hàng</i></b>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <br><br><br>
                        <input name="name" type="text" class="form-control" placeholder="Nhập Họ Và Tên(*Bắt Buộc)"></input><br>
                        <span><?php if (isset($err['name'])) {echo $err['name'];}?></span>
                        <div class="form-text"><b><i>Họ Và Tên</b></i></div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <br><br><br>
                        <input name="phone" type="text" class="form-control"
                            placeholder="Nhập Số Điện Thoại(*Bắt Buộc)"></input><br>
                        <span><?php if (isset($err['phone'])) {echo $err['phone'];}?></span>
                        <div class="form-text"><b><i>Số Điện Thoại</b></i></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <br><br><br>
                        <input name="city" type="text" class="form-control"
                            placeholder="Nhập Tỉnh/Thành Phố(*Bắt Buộc)"></input><br>
                        <span><?php if (isset($err['city'])) {echo $err['city'];}?></span>
                        <div class="form-text"><b><i>Tỉnh/Thành Phố</b></i></div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <br><br><br>
                        <input name="district" type="text" class="form-control"
                            placeholder="Nhập Quận/Huyện(*Bắt Buộc)"></input><br>
                        <span><?php if (isset($err['district'])) {echo $err['district'];}?></span>
                        <div class="form-text"><b><i>Quận/Huyện</b></i></div>
                    </div>
                </div>


                <div class="col-3">
                    <div class="mb-3">
                        <br><br><br>
                        <input name="ward" type="text" class="form-control" placeholder="Nhập Xã/Phường(*Bắt Buộc)"></input><br>
                        <span><?php if (isset($err['ward'])) {echo $err['ward'];}?></span>
                        <div class="form-text"><b><i>Xã/Phường</b></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="mb-3">
                        <br><br><br>
                        <input name="address" type="text" class="form-control"
                            placeholder="Nhập Địa Chỉ Chi Tiết(*Bắt Buộc).VD Tên Nhà/Số Đường/Hẽm.."></input><br>
                        <span><?php if (isset($err['address'])) {echo $err['address'];}?></span>
                        <div class="form-text"><b><i>Nhập Địa Chỉ Chi Tiết</b></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="mb-3">
                        <br><br><br>
                        <textarea name="notes" class="form-control" rows="5" cols="3"
                            placeholder="Nhập Ghi Chú/Yêu Cầu Giao Hàng(*Không Bắt Buộc).VD Giao Hàng Buối Chiều or Giao Hàng Vào Chủ Nhật..."></textarea>
                        <div class="form-text"><b><i>Nhập Ghi Chú/Yêu Cầu Giao Hàng</b></i></div>
                    </div>
                </div>
            </div>
            <button onclick="return confirm('Bạn Đã Nhập Chính Xác Thông Tin Và Xác Nhận Đặt Hàng?')" type="submit"
                class="btn btn-primary"><b><i>Đặt Hàng</b></i></button>
        </form>
    </div>
</div>
<?php
include 'layout/footer.php';
?>