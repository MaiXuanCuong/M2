<?php
include_once '../database.php';
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
// print_r ($rows);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_REQUEST['name'] ;
$category = $_REQUEST['category'] ;
$price = $_REQUEST['price'] ;
// $price    = $_REQUEST['price'] ;
// $category_id = $_REQUEST['category_id'] ;
$sql = "INSERT INTO `books` 
        (`name`,`price`,`category_id`) 
        VALUES 
        ('$name','$price','$category')";

// echo $sql;

$conn->exec($sql);
header('location:index.php');
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
                <input type="text" name="name" id="" class="form-control" placeholder="" value="">
                <br>Category<br>
                <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $key=>$item) : ?>
                    <option value="<?=$item->id;?>"><?=$item->name_category;?></option>
                    <?php endforeach; ?>
                </select><br>
                Price
                <input type="text" name="price" id="" class="form-control" placeholder="" value="">

            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>


        </form>
    </div>
</body>

</html>