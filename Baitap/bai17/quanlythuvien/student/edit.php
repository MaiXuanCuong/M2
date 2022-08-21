<?php include_once "../database.php";?>
<?php
if (isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_REQUEST['name'];
        $class = $_REQUEST['class'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];
        $err=[];
        if(empty($name)){
            $err['books'] = "Bạn không thể để trống phần này!";
        }
        if(empty($class)){
            $err['books'] = "Bạn không thể để trống phần này!";
        }
        if(empty($address)){
            $err['address'] = "Bạn không thể để trống phần này!";
        }
        if(empty($phone)){
            $err['phone'] = "Bạn không thể để trống phần này!";
        }
        if(empty($err)){
            $sql = "UPDATE students SET `name_students` ='$name' , `class` ='$class' , `address` ='$address' , `phone` ='$phone' WHERE id='$id'";
            $conn->query($sql);
            header('location:index.php');    
        }
     }
$sql = "SELECT * FROM students WHERE id='$id'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetch se tra ve du lieu 1 ket qua
$rows = $stmt->fetch();
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
            <legend>Student edit</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?php echo $rows->name_; ?>">
                <span><?php if (isset($err['name'])) {echo $err['name'];}?></span>
                <label for="disabledTextInput" class="form-label">Class</label>
                <input type="text" name="class" id="" class="form-control" placeholder="" value="<?php echo $rows->class; ?>">
                <span><?php if (isset($err['class'])) {echo $err['class'];}?></span>
                <label for="disabledTextInput" class="form-label">Address</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" value="<?php echo $rows->address; ?>">
                <span><?php if (isset($err['address'])) {echo $err['address'];}?></span>
                <label for="disabledTextInput" class="form-label">Phone</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="" value="<?php echo $rows->phone; ?>">
                <span><?php if (isset($err['phone'])) {echo $err['phone'];}?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>
</html>




