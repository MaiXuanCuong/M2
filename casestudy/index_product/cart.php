<?php 
include_once "../database.php";
global $conn;
if(isset($_SESSION['id_user'])){
    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM `product` JOIN categories 
    ON product.category_id = categories.id_category WHERE product.cart is NOT NULL";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
} 
else{
    // $id = $_SESSION['id_user'];
    header ('location:index.php');   
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($_REQUEST) > 3){
    $color = $_REQUEST['color'];
    $configuration = $_REQUEST['configuration'];
    $quantity = $_REQUEST['quantity'];
    $check = $_REQUEST['check'];
    $err=[];
    // print_r($_REQUEST);
    // die();
    if ($check=='' || $check== NULL){
        $err['check']='Bạn không thể để trống chọn sản phẩm';
    }
    if ($color=='' || $color== NULL){
        $err['color']='Bạn không thể để trống Chọn màu';
    }
    if ($configuration=='' || $configuration== NULL){
        $err['configuration']='Bạn không thể để trống Chọn cấu Hình';
    }
    if ($quantity=='' || $quantity== NULL){
        $err['quantity']='Bạn không thể để trống mục số lượng!';
    }
    if(empty($err)){    
        $_SESSION['color'] = $color;
        $_SESSION['configuration'] = $configuration;
        $_SESSION['quantity'] = $quantity;
        $_SESSION['id_product'] = $check;
        
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
        <br> <br>
        <?php if($rows != NULL){ ?>
        <h3><i>Giỏ Hàng</i></h3>
        <div class="row">
            <?php if(isset($rows)){ ?>
            <?php global $value; foreach($rows as $key => $value){ ?>
            <div class="col-xl-2">
                <div class="card mb-4">
                    <div style="text-align: center" class="card-header">
                        <!-- <p class="test"> -->
                        <b style="color: blue"><?php echo $value->name_product?></b>
                        <!-- </p> -->
                    </div>
                    <div style="text-align: center">
                        <img width="140px" height="170px" src="./../product/image/<?php echo $value->image?>" />
                        <br>


                    </div>
                </div>
            </div>
            <div class="col-xl-10">
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


                                    <td height="170px">
                                        <b><i>Chọn Màu
                                                <div style="color:blue">
                                            </i>
                                            <?php $explode1 = explode(';', $value->color );?>
                                            <?php foreach ($explode1 as $key2 => $value2) {?>
                                            <input name="color" type="checkbox"
                                                value="<?php echo $value2; ?>"><?php echo $value2; ?></input>
                                            <?php } ?>
                                    </td>
                    </div>

                    <td height="100%">
                        <b><i>Chọn Cấu Hình </i>
                            <div style="color:blue">
                                <?php $explode5 = explode(';', $value->price_product );?>
                                <?php $explode2 = explode(';', $value->configuration );?>
                                <?php  foreach ($explode2 as $key3 => $value3) {?>
                                <input name="configuration" type="checkbox"
                                    value="<?php echo $value3.";".$explode5[$key3]; ?>"><?php echo $value3.': '.number_format($explode5[$key3])." VNĐ".'<br>'; ?></input>
                                <?php } ?>
                            </div>
                    </td>

                    <td height="100%">
                        <b><i>Số Lượng</i>

                            <div style="color:blue">
                                <input name="quantity" type="number" min="1" max="<?php echo $value->quantity;?>"
                                    value="1"></input>
                            </div>
                    </td>

                    <td height="100%">
                        <b><i>Mua
                                <div style="color:blue">
                            </i>
                            <input type="checkbox" name="check" value="<?php echo $value->id_product; ?>"></input>
                           
                    <td height="100%">

                        <b><i>Xóa
                                <div style="color:blue">
                            </i>
                            <a onclick="return confirm('Bạn có chắc chắn xóa sản phẩm khỏi giỏ hàng');" href="delete_cart.php?id=<?php echo $value->id_product?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg></a>
                            <div>
                            </div>
                    </td>
                    </tr>
                    </table>

                </div>
            </div>
            <!-- </div> -->



        </div>

        <?php } ?>
        <?php } ?>
        <div style="text-align:center">
            <input type="submit" class="button" value="Xác Nhận Mua"></input>
        </div>
    </form>
    <?php } else { echo 'Giỏ Hàng Trống' ;}?><br>
    <a class="btn btn-primary" href="index.php">Thêm Sản Phẩm Vào Giỏ</a>
    </div>

    </main>