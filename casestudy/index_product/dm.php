<?php 
include_once "../database.php";
global $conn;
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM `product` JOIN categories 
    ON product.category_id = categories.id_category WHERE id_product = $id";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
} else{
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

// include_once "layout/sidebar.php";
?>
<br><br>
<br>
<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">

                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                        <ul>

                            <li> <a class="small text-white stretched-link" href="cate.php?id=3"><img width="290px"
                                        height="50px" src="../product/image/hang1_1629782045.png"></a>
                            </li>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                        <ul>
                            <li> <a class="small text-white stretched-link" href="cate.php?id=4"><img width="290px"
                                        height="50px" src="../product/image/hang2_1629782097.png"></a>
                            </li>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul>
                            <li> <a class="small text-white stretched-link" href="cate.php?id=1"><img width="290px"
                                        height="50px" src="../product/image/hang3_1629782127.png"></a>
                            </li>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div style="border-radius: 10px/10px" class="card  text-white mb-4">
                    <div class=" d-flex align-items-center justify-content-between">
                        <ul>
                            <li> <a class="small text-white stretched-link" href="cate.php?id=2"><img width="290px"
                                        height="50px" src="../product/image/hang4_1629782113.png"></a>
                            </li>
                    </div>
                </div>
                </ul>
            </div>
        </div>
        <hr>
        <br>
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
                        <ul>
                            <li class="img_product">
                                <img width="300px" height="330px" src="./../product/image/<?php echo $value->image?>" />
                            </li>
                        </ul><br>
                        <b style="color: blue"><?php echo $value->name_product.": "?></b>
                        <small><?php echo $value->describe;?></small>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                        <b style="color: red">
                            <?php echo number_format($value->price)." VNĐ"?>
                            <span id="price_product"></span>
                        </b>
                        <sub><b><del><small><?php echo number_format($value->price + (($value->price*21)/100))." VNĐ"?></small></del></b></sub>
                    </div>
                    <div style="text-align: center; color:red ">
                        <table width="100%">


                            <form action="" method="post">
                                <tr>
                                    <td><br>
                                        <b>Tình Trạng: <div style="color:blue">
                                                <?php if($value->quantity > 0){ echo '✅Còn Hàng' ;} else{ echo '❌Hết Hàng';};?></b>
                                    </td>
                    </div>
                    </tr>
                    <tr>
                        <td>
                            <hr style="color:black;">
                            <b>Chọn Màu:
                                <div style="color:blue">
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
                        <hr style="color:black;">
                        <b>Chọn Cấu Hình: <div>
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
                        <hr style="color:black;">
                        <b>Số Lượng:<div>
                                <div class=" ">
                                    <div style="color:blue">
                                        <input name="quantity" type="number" min="1"
                                            max="<?php echo $value->quantity;?>" value="1"></input>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <input type="submit" class="btn btn-danger" value="Đặt Hàng">
                        <div>
                        </div>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card mb-4">
            <div style="text-align: center" class="card-header">
                <b> Thông Số Kĩ Thuật</b>
            </div>

            <table>
                <tr>
                    <td>
                        <div style="text-align: left ; color:red ">
                            <b><?php $explode = explode(';', $value->specifications);
                                ?></b>
                            <table>
                                <?php foreach ($explode as $key1 => $value1) {?>
                                <tr>
                                    <td><small><b><?php echo "➣".$value1; ?></b></small>
                                        <!-- <hr style="color:black;"> -->
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <div style="text-align: center" class="card-header">
                            <b class="test">Có Thể Bạn Quan Tâm</b><br>
                        </div>
                        <div style="text-align: center">
                            <b>Khuyến Mãi</b><br>
                            <b><em>➣CHỈ BÁN HÀNG NGUYÊN SEAL 100%, nói không với hàng Fullbox</em><br>
                                <em>➣Tặng dán cường lực Fullview khi nâng cấp sVIP</em><br>
                                <em>➣Hỗ trợ trả góp nhanh, tra góp lãi suất 0% từ xa (*)</em><br>
                                <em>➣Mua Online: Giao hàng tận nhà- Nhận hàng thanh toán</em><br>
                                <em>➣Mọi Thắc Mắc Vui Lòng Liên Hệ: 0843.442.357 Để Được Tư vấn Và Hỗ
                                    Trợ</em><br></b><br><br>
                        </div>
                    </td>
                </tr>
                </form>
            </table>
        </div>
        <?php } ?>
        <?php } ?>
    </div>
    </main>
    <?php
   
include 'layout/footer.php';
?>
   