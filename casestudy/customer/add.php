<?php
include_once '../database.php';
include_once './../layout/header.php';
include_once './../layout/sidebar.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'] ;
    $gender = $_REQUEST['gender'] ;
    $address = $_REQUEST['address'] ;
    $phone = $_REQUEST['phone'] ;
    $gmail = $_REQUEST['gmail'] ;
    $pass = $_REQUEST['pass'] ;
    $User = 'User';
$err=[];
if($name=='')
{
    $err['name'] ='Bạn không thể để trống mục này!';
}
if($gender=='')
{
    $err['gender'] ='Bạn không thể để trống mục này!';
}
if($address=='')

{
    $err['address'] ='Bạn không thể để trống mục này!';
}
if($phone=='')
{
    $err['phone'] ='Bạn không thể để trống mục này!';
}
if($gmail=='')
{
    $err['gmail'] ='Bạn không thể để trống mục này!';
}
if($pass=='')
{
    $err['pass'] ='Bạn không thể để trống mục này!';
}
if(empty($err))
{
    $sql = "INSERT INTO `customer` 
    (`name_customer`,`gender_customer`,`address_customer`,`phone_customer`,`gmail_customer`,`pass`,`role`) 
    VALUES 
    ('$name','$gender','$address','$phone','$gmail',$pass,'$User')";

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
            <legend>Add Student</legend>
          
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Họ Và Tên</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['name'])) {echo $err['name'];}?></span><br>

                <label for="disabledTextInput" class="form-label">Giới Tính</label><br>
                <input type="radio" name="gender" id=""  placeholder="" value="Nam">Nam<br>
                <input type="radio" name="gender" id=""  placeholder="" value="Nữ">Nữ<br>
                <input type="radio" name="gender" id=""  placeholder="" value="Khác">Khác<br>
                <span><?php if (isset($err['gender'])) {echo $err['gender'];}?></span><br>

                <label for="disabledTextInput" class="form-label">Địa Chỉ</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['address'])) {echo $err['address'];}?></span><br>

                <label for="disabledTextInput" class="form-label">Số Điện Thoại</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['phone'])) {echo $err['phone'];}?></span><br>

                <label for="disabledTextInput" class="form-label">Tài Khoản Đăng Nhập</label>
                <input type="text" name="gmail" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['gmail'])) {echo $err['gmail'];}?></span><br>

                <label for="disabledTextInput" class="form-label">Mật Khẩu</label>
                <input type="password" name="pass" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['pass'])) {echo $err['pass'];}?></span><br>

            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="index.php" class="btn btn-danger">Hủy</a>
        </form>
    </div>
    </div>
    </div>
</body>
</html>
<?php include_once './../layout/footer.php';
 ?>