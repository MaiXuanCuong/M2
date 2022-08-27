<?php
include_once '../database.php';
include_once './../layout/header.php';
// include_once './../layout/sidebar.php';
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
$sql1 = "SELECT * FROM product";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
// print_r ($rows);
$sql2 = "SELECT * FROM order_product";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
$rows2 = $stmt2->fetchAll();
// print_r ($rows);
// $sql3 = "SELECT * FROM customer ";
// $stmt3 = $conn->query($sql3);
// $stmt3->setFetchMode(PDO::FETCH_OBJ);
// $rows3 = $stmt3->fetchAll();
// print_r ($rows);
// global $id_b ;
// echo $id_b;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$product = $_REQUEST['product'] ;
$category = $_REQUEST['category'] ;
$quantity = $_REQUEST['quantity'] ;
$customer = $_REQUEST['id'] ;
date_default_timezone_set("Asia/Ho_Chi_Minh");

$borrow = date("Y-m-d H:i:s");


// $total 
$err=[];
    if ($quantity==''){
        $err['quantity']='Bạn không thể để trống mục số lượng!';
    }

if(empty($err))
{
    $sql = "INSERT INTO `order_product` 
    (`customer_id`,`date_borrow`,`quantity_order`) 
    VALUES 
    ('$customer','$borrow','$quantity')"
    ;
   $conn->exec($sql);
$sql4 = "SELECT id_order_product FROM `order_product`";
$stmt4 = $conn->query($sql4);
$stmt4->setFetchMode(PDO::FETCH_OBJ);
$rows4 = $stmt4->fetchAll();
$max=0;
// print_r ($rows4);
// die();
foreach ($rows4 as $key0 => $row0){
    if($row0->id_order_product> $max){
        $max =$row0->id_order_product;
    }
}
// print_r ($max);
// die();
$sql1 = "SELECT * FROM product WHERE id_product = $product ";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetch();

$total1 = ($quantity * $rows1->price);
$sql = "INSERT INTO `orders_detail` 
            (`order_product_id`,`product_id`,`total_price`) 
            VALUES 
            ('$max','$product','$total1')";
    $conn->exec($sql);
    header('location:index.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <legend><h1>Đặt Hàng</h1></legend>
            <div class="mb-3">
                <br>Sản Phẩm<br>
                <select name="product" class="form-control" id="">
                    <?php foreach ($rows1 as $key1=>$item1) : ?>
                    <option value="<?=$item1->id_product;?>"><?=$item1->name_product;?></option>
                    <?php endforeach; ?>
                </select><br>
               <br>Số Lượng<br>
                <input type="Number" name="quantity" id="" class="form-control" placeholder="" value="1">
                <span><?php if(isset($err['quantity'])){echo $err['quantity'];}?></span>
            </div>
            <button type="submit" class="btn btn-primary">Đặt Hàng</button>
            <a href="index.php" class="btn btn-danger">Hủy</a>
        </form>
    </div>
</body>

</html>

<?php include_once './../layout/footer.php';
 ?>