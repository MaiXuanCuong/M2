<?php
include_once '../database.php';
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
$sql1 = "SELECT * FROM books ";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
// print_r ($rows);
$sql2 = "SELECT * FROM orders_books ";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
$rows2 = $stmt2->fetchAll();
// print_r ($rows);
$sql3 = "SELECT * FROM students ";
$stmt3 = $conn->query($sql3);
$stmt3->setFetchMode(PDO::FETCH_OBJ);
$rows3 = $stmt3->fetchAll();
// print_r ($rows);
// global $id_b ;
// echo $id_b;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$books = $_REQUEST['books'] ;
$category = $_REQUEST['category'] ;
$quantity = $_REQUEST['quantity'] ;
$students = $_REQUEST['students'] ;
$borrow = $_REQUEST['borrow'] ;
$pay = $_REQUEST['pay'] ;
// $total 
$err=[];
    if ($quantity==''){
        $err['quantity']='Bạn không thể để trống mục này!';
    }

if ($borrow==''){
    $err['borrow']='Bạn không thể để trống mục này!';
}
if ($pay==''){
    $err['pay']='Bạn không thể để trống mục này!';
}
if(empty($err))
{
    $sql = "INSERT INTO `orders_books` 
    (`student_id`,`date_borrow`,`date_pay`) 
    VALUES 
    ('$students','$borrow','$pay')"
    ;
   $conn->exec($sql);


$sql4 = "SELECT id_order_book FROM `orders_books`";
$stmt4 = $conn->query($sql4);
$stmt4->setFetchMode(PDO::FETCH_OBJ);
$rows4 = $stmt4->fetchAll();
$max=0;
// print_r ($rows4);
// die();
foreach ($rows4 as $key0 => $row0){
    if($row0->id_order_book > $max){
        $max =$row0->id_order_book;
    }
}
// print_r ($max);
// die();

$sql1 = "SELECT * FROM books WHERE id_book = $books ";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetch();

$total1 = ($quantity * $rows1->price);
$sql = "INSERT INTO `orders_detail` 
            (`order_book_id`,`book_id`,`quantity`,`total_price`) 
            VALUES 
            ('$max','$books','$quantity','$total1')";
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
            <legend><h1>Orders</h1></legend>
            <div class="mb-3">
            <br>Student<br>
                <select name="students" class="form-control" id="">
                    <?php foreach ($rows3 as $key3=>$item3) : ?>
                    <option value="<?=$item3->id_student;?>"><?=$item3->name_student;?></option>
                    <?php endforeach; ?>
                </select><br>
                <br>Category<br>
                <select name="category" class="form-control" id="">

                    <?php foreach ($rows as $key=>$item) : ?>
                    <option value="<?=$item->id_category;?>"><?=$item->name_category;?></option>
                    <?php endforeach; ?>
                </select><br>
                <br>Books<br>
                <select name="books" class="form-control" id="">
                    <?php foreach ($rows1 as $key1=>$item1) : ?>
                    <option value="<?=$item1->id_book;?>"><?=$item1->name_book;?></option>
                    <?php endforeach; ?>
                </select><br>
                <br>Date Borrow<br>
        
               <input type="date"  name="borrow" class="form-control">
               <span><?php if(isset($err['borrow'])){echo $err['borrow'];}?></span>
                <br>Date Pay<br>
               <input type="date" name="pay" class="form-control">
               <span><?php if(isset($err['pay'])){echo $err['pay'];}?></span>
               <br>Quantity<br>
                <input type="Number" name="quantity" id="" class="form-control" placeholder="" value="1">
                <span><?php if(isset($err['quantity'])){echo $err['quantity'];}?></span>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>

</html>