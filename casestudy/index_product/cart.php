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
        <h3 ><i >Giỏ Hàng</i></h3>
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
                            <b ><i>Chọn Màu
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
                        <b ><i>Chọn Cấu Hình </i>
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
                        <b ><i>Số Lượng</i>

                            <div style="color:blue">
                                <input name="quantity" type="number" min="1" max="<?php echo $value->quantity;?>"
                                    value="1"></input>
                            </div>
                    </td>
               
                    <td height="100%">
                        <input type="checkbox" name="check"></input>
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
        <input  type="submit" class="button" value="Xác Nhận Mua"></input>
        </div>
        </form>
    </div>
    </main>