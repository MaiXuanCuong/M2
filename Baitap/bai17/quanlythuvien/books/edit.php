<?php
include_once '../database.php';
$sql = "SELECT * FROM categories";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();


if(isset($_REQUEST['id']))
{
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM books where id = '$id'";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $items = $stmt->fetch();
    
    // print_r ($rows);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'] ;
    $category = $_REQUEST['category'] ;
    
    $price = $_REQUEST['price'] ;
    // $price    = $_REQUEST['price'] ;
    // $category_id = $_REQUEST['category_id'] ;
    
    $err=[];
    if($name=='')
    {
        $err['name']='Bạn không thể để trống mục này!';
    }
    if ($price==''){
        $err['price']='Bạn không thể để trống mục này!';
    }
    if(empty($err))
    {
        $sql = "UPDATE `books` SET `name`='$name',`category_id`='$category',`price`='$price' WHERE `id` = '$id'";
        
        // echo $sql;
        
        $conn->exec($sql);
        header('location:index.php');
    }
    
}
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
            <legend>Add Product</legend>
          
            <div class="mb-3">
                Name
                <input type="text" name="name" id="" class="form-control" placeholder="" value="<?php /*if(isset($items)) {}*/ echo $items->name;?>">
               
                <br>Category<br>
                <select name="category" class="form-control" id="">
                    <?php foreach ($rows as $key => $row) {?>
                    <option <?=$row->id == $items->category_id ? "selected" : " " ?> value="<?php echo $row->id;?>"><?=$row->name_category;?></option>
                    <?php } ?>
                </select><br>
                Price
                <input type="text" name="price" id="" class="form-control" placeholder="" value="<?php /*if(isset($items)){} */echo $items->price;?>">
      
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">cancel</a>


        </form>
    </div>
</body>

</html>