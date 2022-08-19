<?php include_once "./../layout/header.php";
include_once "../database.php";
?>
<?php include_once "./../layout/sidebar.php";?>

<?php



if (isset($_REQUEST['id'])){

    $id = $_REQUEST['id'];
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $books = $_REQUEST['name'];
        // echo $books;
        $err=[];
        if(empty($books)){
            $err['books'] = "Bạn không thể để trống phần này!";
        }
        else{
            $sql = "UPDATE Categories SET name_category='$books' WHERE id='$id'";
            $conn->query($sql);
            header('location:index.php');    
        }
      
     }
     // echo $id;
$sql = "SELECT * FROM categories WHERE id='$id'";
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
            <legend>Category edit</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?php echo $rows->name_category; ?>">
                <span><?php if (isset($errors['name'])) {
                            echo $errors['name'];
                        }
                          ?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
    </div>
</body>
</html>

<?php include_once "./../layout/footer.php"; ?>



