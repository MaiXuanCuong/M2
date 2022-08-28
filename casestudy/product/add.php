<?php
include_once '../database.php';
include_once './../layout/header.php';
// include_once './../layout/sidebar.php';
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_REQUEST['name'] ;
$category = $_REQUEST['category'] ;
$price = $_REQUEST['price'] ;
$image = $_REQUEST['image'] ;
$describe  = $_REQUEST['describe'] ;
$quantity = $_REQUEST['quantity'] ;
$specifications = $_REQUEST['specifications'] ;
$color = null;
$err=[];
if($name=='')
{
    $err['name']='Bạn không thể để trống mục này!';
}
if ($price==''){
    $err['price']='Bạn không thể để trống mục này!';
}
if ($quantity==''){
    $err['quantity']='Bạn không thể để trống mục này!';
}
if ($describe==''){
    $err['describe']='Bạn không thể để trống mục này!';
}
if ($specifications==''){
    $err['specifications']='Bạn không thể để trống mục này!';
}
if ($image==''){
    $err['image']='Bạn không thể để trống mục này!';
}
if(empty($err))
{
    $sql = "INSERT INTO `product` 
            (`name_product`,`price`,`category_id`,`describe`,`quantity`,`specifications`,`image`,`color`) 
            VALUES 
            ('$name','$price','$category','$describe','$quantity','$specifications','$image',$color)";
    $conn->exec($sql);
    header('location:../index/index.php');
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
<div id="layoutSidenav_content">
        <main>
    <div class="container">
        <form method="post" action="">
            <legend>Add Product</legend>
            <div class="mb-3">
                Name
                <input type="text" name="name" id="" class="form-control" placeholder="" value="">
                <span><?php if(isset($err['name'])){echo $err['name'];}?></span>
                <br>Category<br>
                <select name="category" class="form-control" id="">
                <?php foreach ($rows as $key=>$item) : ?>
                <option value="<?=$item->id_category;?>"><?=$item->name_category;?></option>
                <?php endforeach; ?>
                </select><br>
                Price
                <input type="text" name="price" id="" class="form-control" placeholder="" value="">
                <span><?php if(isset($err['price'])){echo $err['price'];}?></span>
                Quantity
                <input type="text" name="quantity" id="" class="form-control" placeholder="" value="">
                <span><?php if(isset($err['quantity'])){echo $err['quantity'];}?></span>
                Describe
                <textarea name="describe" id="" class="form-control" placeholder="" value=""></textarea>
                <span><?php if(isset($err['describe'])){echo $err['describe'];}?></span>
                Specifications
                <textarea name="specifications" id="" class="form-control" placeholder="" value=""></textarea>
                <span><?php if(isset($err['specifications'])){echo $err['specifications'];}?></span>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Images</label>
                <input type="file" name="image" id="" class="form-control" placeholder="" value="">
            </div>
               <span><?php if(isset($err['image'])){echo $err['image'];}?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
    
</body>
</html>

<?php include_once './../layout/footer.php';
?>