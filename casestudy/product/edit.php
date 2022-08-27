<?php
include_once '../database.php';
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM product where id_product = '$id'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $items = $stmt->fetch();
    // print_r ($rows);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'] ;
    $category = $_REQUEST['category'] ;
    
    $price = $_REQUEST['price'] ;
    $quantity = $_REQUEST['quantity'] ;
    $image = $_REQUEST['image'] ;
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
    if ($image==''){
        $err['image']='Bạn không thể để trống mục này!';
    }
    if(empty($err))
    {
        $sql = "UPDATE `product` SET `name_product`='$name',`category_id`='$category',`price`='$price', `quantity`= $quantity, `image`='$image' WHERE `id_product` = '$id'";
        $conn->exec($sql);
        header('location:index.php');
    }
}
}
else {
    header('location:../error/404.php');
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
                Name
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?php echo $items->name_product;?>">
                <br>Category<br>
                <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $key => $row) {?>
                    <option <?=$row->id_category == $items->category_id ? "selected" : " " ?> value="<?php echo $row->id_category;?>"><?=$row->name_category;?></option>
                    <?php } ?>
                </select><br>
                Price
                <input type="text" name="price" id="" class="form-control" placeholder="" value="<?php echo $items->price;?>">
            </div>
                Quantity
                <input type="text" name="quantity" id="" class="form-control" placeholder="" value="<?php echo $items->quantity;?>">
                Image<br>
                <img src="../product/image/<?php echo $items->image?>" width="120px" height="120px" alt=""><br><br>
                <input type="file" name="image" id="" class="form-control" placeholder="" value="">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
                <a href="./../index/index.php" class="btn btn-danger">Back Home</a>
        </form>
    </div>
</body>
</html>

<?php include_once './../layout/footer.php';
 ?>