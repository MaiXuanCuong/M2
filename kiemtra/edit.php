<?php 
include_once "db.php";
?>
<?php
global $conn;
if(isset($_REQUEST['id'])){

$id1 = $_REQUEST['id'] ;
$sql = "SELECT * FROM quanlyhs WHERE id = $id1";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetch();

$sql1 = "SELECT * FROM gender";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();

$sql2 = "SELECT * FROM class";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
$rows2 = $stmt2->fetchAll();
// print_r ($rows);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_REQUEST['name'] ;
$class = $_REQUEST['class'] ;
$birthday = $_REQUEST['birthday'] ;
$gender = $_REQUEST['gender'] ;
$information = $_REQUEST['information'] ;

$err=[];

if($name=='')
{
    $err['name']='Bạn không thể để trống Tên Học Sinh';
}
if ($class==''){
    $err['class']='Bạn không thể để trống Lớp';
}
if ($birthday==''){
    $err['birthday']='Bạn không thể để trống Ngày sinh';
}
if ($gender==''){
    $err['gender']='Bạn không thể để trống Giới tính';
}

if ($information==''){
    $err['information']='Bạn không thể để trống Thông Tin học sinh';
}
if(empty($err))
{
    $sql = "UPDATE `quanlyhs` SET `name`='$name',`birthday`='$birthday', `gender_id`='$gender',`information`='$information',`class_id`='$class' WHERE `id` = '$id1'";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <br>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <form method="post" action="">
                    <legend><i>Thêm Học Sinh</i></legend>
                    <div class="mb-3">
                        <i>Tên Học Sinh</i>
                        <input type="text" name="name" id="" class="form-control" placeholder="" value="<?php echo $rows->name; ?>">
                        <span><?php if(isset($err['name'])){echo $err['name'];}?></span>
                        <br><i>Lớp</i><br>
                        <select name="class" class="form-control" id=""  >
                            <?php foreach ($rows2 as $key=>$item) : ?>
                            <option <?=$rows->class_id == $item->id_class ? "selected" : " " ?> value="<?=$item->id_class;?>"><?=$item->name_class;?></option>
                            <?php endforeach; ?>
                        </select><br>
                        <i>Ngày Sinh</i>
                        <input type="date" name="birthday" id="" class="form-control" placeholder="" value="<?php echo $rows->birthday; ?>">
                        <span><?php if(isset($err['birthday'])){echo $err['birthday'];}?></span>
                        <i>Giới Tính</i>
                        <select name="gender" class="form-control" id="">
                            <?php foreach ($rows1 as $key=>$item1) : ?>
                            <option <?=$rows->gender_id == $item1->id_gender ? "selected" : " " ?> value="<?=$item1->id_gender;?>"><?=$item1->name_gender;?></option>
                            <?php endforeach; ?>
                        </select><br>
                        <i>Thông tin học sinh</i>
                        <textarea name="information" id="" class="form-control" placeholder="" value=""><?php echo $rows->information; ?></textarea>
                        <span><?php if(isset($err['information'])){echo $err['information'];}?></span><br>    
                    <button type="submit" class="btn btn-primary"><i>Lưu</i></button>
                    <a href="index.php" class="btn btn-danger"><i>Hủy</i></a>
                </form>
            </div>
            <br>
</body>

</html>
<?php }?>

