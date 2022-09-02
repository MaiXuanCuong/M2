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
$price_product = $_REQUEST['price_product'] ;
$configuration = $_REQUEST['configuration'] ;
$color = $_REQUEST['color'];
$err=[];


if($price_product=='')
{
    $err['price_product']='Bạn không thể để trống mục Giá Theo Cấu Hình!';
}
if($configuration=='')
{
    $err['configuration']='Bạn không thể để trống mục Cấu Hình!';
}
if($name=='')
{
    $err['name']='Bạn không thể để trống Tên Sản Phẩm!';
}
if ($price==''){
    $err['price']='Bạn không thể để trống Giá Sản Phẩm!';
}
if ($quantity==''){
    $err['quantity']='Bạn không thể để trống Số Lượng Sản Phẩm!';
}
if ($describe==''){
    $err['describe']='Bạn không thể để trống Mô Tả!';
}
if ($specifications==''){
    $err['specifications']='Bạn không thể để trống Cấu HÌnh ChI Tiết!';
}
if ($image==''){
    $err['image']='Bạn không thể để trống Ảnh!';
}
if ($color==''){
    $err['color']='Bạn không thể để trống Màu Sản Phẩm!';
}
if(empty($err))
{
    $sql = "INSERT INTO `product` 
            (`name_product`,`price`,`category_id`,`describe`,`quantity`,`specifications`,`image`,`color`,`price_product`,`configuration`) 
            VALUES 
            ('$name','$price','$category','$describe','$quantity','$specifications','$image','$color','$price_product','$configuration')";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <br>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <form method="post" action="">
                    <legend><i>Thêm Sản Phẩm</i></legend>
                    <div class="mb-3">
                        <i>Tên Sản Phẩm</i>
                        <input type="text" name="name" id="" class="form-control" placeholder="" value="">
                        <span><?php if(isset($err['name'])){echo $err['name'];}?></span>
                        <br><i>Danh mục</i><br>
                        <select name="category" class="form-control" id="">
                            <?php foreach ($rows as $key=>$item) : ?>
                            <option value="<?=$item->id_category;?>"><?=$item->name_category;?></option>
                            <?php endforeach; ?>
                        </select><br>
                        <i>Giá Mặc Định</i>
                        <input type="text" name="price" id="" class="form-control" placeholder="" value="">
                        <span><?php if(isset($err['price'])){echo $err['price'];}?></span>
                        <i>Số Lượng</i>
                        <input type="text" name="quantity" id="" class="form-control" placeholder="" value="">
                        <span><?php if(isset($err['quantity'])){echo $err['quantity'];}?></span>
                        <i>Mô Tả</i>
                        <textarea name="describe" id="" class="form-control" placeholder="" value=""></textarea>
                        <span><?php if(isset($err['describe'])){echo $err['describe'];}?></span>
                        <i>Chi Tiết Kỹ Thuật</i>
                        <textarea name="specifications" id="" class="form-control" placeholder="" value=""></textarea>
                        <span><?php if(isset($err['specifications'])){echo $err['specifications'];}?></span>
                        <div class="mb-3">
                            <i>Màu Sản Phẩm</i>
                            <input type="text" name="color" id="" class="form-control" placeholder="" value="">
                            <span><?php if(isset($err['color'])){echo $err['color'];}?></span>
                            <i>Cấu Hình</i>
                            <input type="text" name="configuration" id="" class="form-control" placeholder="" value="">
                            <span><?php if(isset($err['configuration'])){echo $err['configuration'];}?></span>
                            <i>Giá Theo Cấu Hình</i>
                            <input type="text" name="price_product" id="" class="form-control" placeholder="" value="">
                            <span><?php if(isset($err['price_product'])){echo $err['price_product'];}?></span>
                            <label for="disabledTextInput" class="form-label"><i>Images</i></label>
                            <input type="file" name="image" id="" class="form-control" placeholder="" value="">
                        </div>
                        <span><?php if(isset($err['image'])){echo $err['image'];}?></span>
                    </div>
                    <button type="submit" class="btn btn-primary"><i>Thêm</i></button>
                    <a href="index.php" class="btn btn-danger"><i>Hủy</i></a>
                </form>
            </div>
            <br>
</body>

</html>

<?php include_once './../layout/footer.php';
?>