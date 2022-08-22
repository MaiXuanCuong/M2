<?php
include_once '../database.php';
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();


if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM orders_book where id_order_book = '$id'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $items = $stmt->fetch();
    
    // print_r ($rows);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date_borrow = $_REQUEST['date_borrow'] ;
    $id = $_REQUEST['id'];
    $date_pay = $_REQUEST['date_pay'] ;
    $err=[];
    if($date_borrow=='')
    {
        $err['name']='Bạn không thể để trống mục này!';
    }
    if ($date_pay==''){
        $err['price']='Bạn không thể để trống mục này!';
    }
    if(empty($err))
    {
        $sql = "UPDATE `orders_books` SET `date_borrow`='$date_borrow',`date_pay`='$date_pay',`student_id`='$id' WHERE `id_order_book` = '$id'";
        
        // echo $sql;
        
        $conn->exec($sql);
        header('location:index.php');
    }
    
}
}
else {
    header('location:../err.php');
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
            <legend>Add Product</legend>
          
            <div class="mb-3">
                Date borrow
                <input type="text" name="date_borrow" id="" class="form-control" placeholder="" value="<?php /*if(isset($items)) {}*/ echo $items->name;?>">
               
                <br>Date pay<br>
                <input type="text" name="date_pay" class="form-control" id="">
                    
      
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>


        </form>
    </div>
</body>

</html>