<?php 
include_once "../database.php";
global $conn;
if(isset($_REQUEST['id_user'])){
    $id = $_REQUEST['id_user'];
    $sql = "SELECT * FROM `product` JOIN categories 
    ON product.category_id = categories.id_category WHERE product.cart is NOT NULL";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
} 
else{
    header ('location:index.php');   
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $color = $_REQUEST['color'];
    $configuration = $_REQUEST['configuration'];
    $quantity = $_REQUEST['quantity'];
    
    $err=[];
    if ($color==''){
        $err['color']='Bạn không thể để trống mục số lượng!';
    }
    if ($configuration==''){
        $err['configuration']='Bạn không thể để trống mục số lượng!';
    }
    if ($quantity==''){
        $err['quantity']='Bạn không thể để trống mục số lượng!';
    }
    if(empty($err)){
        $_SESSION['color'] = $color;
        $_SESSION['configuration'] = $configuration;
        $_SESSION['quantity'] = $quantity;
        $_SESSION['id_product'] = $id;
        header ('location:order.php');   
    }
}
include_once "layout/header.php"; 

include_once "layout/sidebar.php";
?>
<br><br>
<br>
<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <br> <br>
        <div class="row">
            <?php if(isset($rows)){ ?>
            <?php global $value; foreach($rows as $key => $value){ ?>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                        <!-- <p class="test"> -->
                        <b style="color: blue"><?php echo $value->name_product?></b>
                        <!-- </p> -->
                    </div>
                    <div style="text-align: center">
                                <img width="300px" height="330px" src="./../product/image/<?php echo $value->image?>" />
                        <br>
                        <b style="color: blue"><i><?php echo $value->name_product.": "?></i></b>

                        <small><?php echo $value->describe;?> <br><br><br></small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                        <b style="color: red">
                            <i><?php echo number_format($value->price)." VNĐ"?></i>
                        </b>
                        <sub><b><del><small><?php echo number_format($value->price + (($value->price*21)/100))." VNĐ"?></small></del></b></sub>
                    </div>
                    <div style="text-align: center; color:red ">
                        <table width="100%">
                            <form action="" method="post">
                                <tr>
                                    <td>
                                        <b><i>Tình Trạng <div style="color:blue"></i>
                                            <?php if($value->quantity > 0){ echo '✅Còn Hàng' ;} else{ echo '❌Hết Hàng';};?></b>
                                        <div style="text-align: left" class="policy">
                                            <div>
                                                <p><i style="color:black ; font-size:20px" class='fas fa-box-open'></i>
                                                    Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng
                                                </p>
                                            </div>
                                            <div>
                                                <p><i style="color:black ; font-size:20px" class='fas fa-award'></i> Bảo
                                                    hành chính hãng 12 tháng.</p>
                                            </div>
                                            <div class="last">
                                                <p><i style="color:black ; font-size:20px"
                                                        class='fa-solid fa-people-carry-box'></i> 1 đổi 1 trong 1 tháng
                                                    nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</p>
                                            </div>
                                        </div>
                                    </td>
                    </div>
                    </tr>
                    <tr>
                        <td>
                            <b class="policy"><i>Chọn Màu
                                    <div style="color:blue">
                                </i>
                                <?php $explode1 = explode(';', $value->color );?>
                                <?php foreach ($explode1 as $key2 => $value2) {?>
                                <input name="color" type="radio" checked="checked"
                                    value="<?php echo $value2; ?>"><?php echo $value2; ?></input>
                                <?php } ?>
                        </td>
                </div>
                </tr>
                <tr>
                    <td>
                        <b class="policy"><i>Chọn Cấu Hình </i>
                            <div style="color:blue">
                                <?php $explode5 = explode(';', $value->price_product );?>
                                <?php $explode2 = explode(';', $value->configuration );?>
                                <?php  foreach ($explode2 as $key3 => $value3) {?>
                                <input name="configuration" type="radio" checked="checked"
                                    value="<?php echo $value3.";".$explode5[$key3]; ?>"><?php echo $value3.': '.number_format($explode5[$key3])." VNĐ".'<br>'; ?></input>
                                <?php } ?>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b class="policy"><i>Số Lượng</i>

                            <div style="color:blue">
                                <input name="quantity" type="number" min="1" max="<?php echo $value->quantity;?>"
                                    value="1"></input>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="button " value="Đặt Hàng"><br><br><br></input>
                        <div>
                        </div>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
   
                </form>
            </table>
        </div>
        <br><br><br> <br><br><br>
        <?php } ?>
        <?php } ?>
    </div>
    </main>
    <?php include 'layout/footer.php';?>