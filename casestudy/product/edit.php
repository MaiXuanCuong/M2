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
    // print_r ($items);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'] ;
    $category = $_REQUEST['category'] ;
    $specifications = $_REQUEST['specifications'] ;
    $describe = $_REQUEST['describe'] ;
    $price = $_REQUEST['price'] ;
    $quantity = $_REQUEST['quantity'] ;
    $color = $_REQUEST['color'] ;
    $configuration = $_REQUEST['configuration'] ;
    $image = $_REQUEST['image'] ;
    if ($image==''){
        $image = $items->image;
    }
    $err=[];
    if($name=='')
    {
        $err['name']='Bạn không thể để trống mục này!';
    }
    if($configuration=='')
    {
        $err['configuration']='Bạn không thể để trống mục này!';
    }
    if($color=='')
    {
        $err['color']='Bạn không thể để trống mục này!';
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
    if ($specifications==''){
        $err['specifications']='Bạn không thể để trống mục này!';
    }
    if ($describe==''){
        $err['describe']='Bạn không thể để trống mục này!';
    }
    if(empty($err))
    {
        $sql = "UPDATE `product` SET `specifications`='$specifications',`describe`='$describe', `name_product`='$name',`category_id`='$category',`price`='$price', `quantity`= $quantity, `image`='$image' ,`color`= '$color', `configuration` = '$configuration' WHERE `id_product` = '$id'";
        $conn->exec($sql);
        header('location:../index/index.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <legend>Thêm Sản Phẩm</legend>
            <div class="mb-3">
                Sản Phẩm
                <input type="text" name="name" id="" class="form-control" placeholder=""
                    value="<?php echo $items->name_product;?>">
                <br>Danh Mục<br>
                <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $key => $row) {?>
                    <option <?=$row->id_category == $items->category_id ? "selected" : " " ?>
                        value="<?php echo $row->id_category;?>"><?=$row->name_category;?></option>
                    <?php } ?>
                </select><br>
                Cấu Hình
                <textarea name="specifications" id="" cols="30" class="form-control"
                    rows="5"><?php echo $items->specifications;?></textarea>
                Mô Tả
                <textarea name="describe" id="" cols="30" class="form-control"
                    rows="5"><?php echo $items->describe;?></textarea>
                Giá
                <input type="text" name="price" id="" class="form-control" placeholder=""
                    value="<?php echo $items->price;?>">
            </div>
            Số Lượng
            <input type="text" name="quantity" id="" class="form-control" placeholder=""
                value="<?php echo $items->quantity;?>">
            Màu Sắc
            <input type="text" name="color" id="" class="form-control" placeholder=""
                value="<?php echo $items->color;?>">
            Cấu Hình
            <input type="text" name="configuration" id="" class="form-control" placeholder=""
                value="<?php echo $items->configuration;?>">
            Ảnh<br>
            <img src="../product/image/<?php echo $items->image?>" width="120px" height="120px" alt=""><br><br>
            <input type="file" name="image" id="" class="form-control" placeholder=""
                value="<?php echo $items->image?>">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="index.php" class="btn btn-danger">Hủy</a>
            <a href="./../index/index.php" class="btn btn-danger">Về Trang Chủ</a>
        </form>
    </div>
</body>

</html>

<?php include_once './../layout/footer.php';
 ?>