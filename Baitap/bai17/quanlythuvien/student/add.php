<?php
include_once '../database.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'] ;
    $class = $_REQUEST['class'] ;
    $address = $_REQUEST['address'] ;
    $phone = $_REQUEST['phone'] ;
$err=[];
if($name=='')
{
    $err['name'] ='Bạn không thể để trống mục này!';
}
if($class=='')
{
    $err['class'] ='Bạn không thể để trống mục này!';
}
if($address=='')

{
    $err['address'] ='Bạn không thể để trống mục này!';
}
if($phone=='')
{
    $err['phone'] ='Bạn không thể để trống mục này!';
}
if(empty($err))
{
    $sql = "INSERT INTO `students` 
    (`name_student`,`class`,`address`,`phone`) 
    VALUES 
    ('$name','$class','$address','$phone')";

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
            <legend>Add Student</legend>
          
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['name'])) {echo $err['name'];}?></span><br>
                <label for="disabledTextInput" class="form-label">Class</label>
                <input type="text" name="class" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['class'])) {echo $err['name'];}?></span><br>
                <label for="disabledTextInput" class="form-label">Address</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['address'])) {echo $err['name'];}?></span><br>
                <label for="disabledTextInput" class="form-label">Phone</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="" value="">
                <span><?php if (isset($err['phone'])) {echo $err['name'];}?></span><br>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>


        </form>
    </div>
</body>

</html>