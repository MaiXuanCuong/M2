<?php
include_once '../database.php';
include_once './../layout/header.php';
include_once './../layout/sidebar.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'] ;
$err=[];
if($name=='')
{
    $err['name']='Bạn không thể để trống mục này!';
}
if(empty($err))
{
    $sql = "INSERT INTO `categories` 
    (`name_category`) 
    VALUES 
    ('$name')";

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
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <!-- <main> -->
    <div class="container">
        <form method="post" action="">
            <legend><i>Thêm Danh Mục</i></legend>
          
            <div class="mb-3" >
                <label for="disabledTextInput" class="form-label"><i>Tên Danh Mục</i></label>
                <input type="text" name="name"  id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['name'])) {
                            echo $err['name'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary"><i>Thêm</i></button>
            <a href="index.php" class="btn btn-danger"><i>Hủy</i></a>
        </form>
    </div>
    </div>
    </div>
</body>

</html>
<?php include_once "../layout/footer.php"; ?>