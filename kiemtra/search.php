<?php 
include_once "db.php"; 
?>
<?php 
global $conn;


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$search = $_REQUEST['search'] ;

$err = [];
if(empty($search)){
    $err["search"] = 'Vui Lòng Nhập Dữ Liệu TÌm Kiếm';
}
if(empty($err)){
$sql1 = "SELECT * FROM gender JOIN
 `quanlyhs` ON gender.id_gender = quanlyhs.gender_id JOIN class
ON quanlyhs.class_id = class.id_class WHERE `name` LIKE '%$search%' OR name_class LIKE '%$search%'";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
}
        </style>
    </head>
<br><br><br><br>
<div id="layoutSidenav">
    
    <div id="layoutSidenav_content">
        
        <div class="row">
            
        <div class="col-xl-12">
                <a class="btn btn-success" href="index.php"><i>Trở Về</i></a>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
            &nbsp;&nbsp;&nbsp;<div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex" method="post" action="search.php">
                        <input class="form-control me-2" name="search" type="search" placeholder="Tìm Kiếm"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm&nbsp;Kiếm</button><br>
                        <span><?php if(isset($err['search'])){echo $err['search'];} ?></span>
                    </form>
                </div>
            </div>
        </nav>
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
            <div class="container-fluid px-4">
                
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"><i>Mã Học Sinh</i><hr></th>
                            <th scope="col"><i>Tên Học Sinh</i><hr></th>
                            <th scope="col"><i>lớp</i><hr></th>
                            <!-- <th scope="col">Cấu Hình</th> -->
                            <!-- <th scope="col">Mô Tả</th> -->
                            <th scope="col"><i>Ngày Sinh</i><hr></th>
                            <th scope="col"><i>Giới Tính</i><hr></th>
                            <th scope="col"><i>Thông tin Học Sinh</i><hr></th>
                            <th scope="col"><i>Thao tác</i><hr></th>
                        </tr>
                    </thead>
                    <?php if($search != "" && $search != NULL){ ?>
                    <?php foreach ($rows1 as $key => $row) { ?>
                        <tbody>
                            <tr style="text-align: center">
                                <td width="100px" height="180px"><i><?=$row->id?></i></td>
                                <td width="280px"><i><?=$row->name?></i></td>
                                <td width="170px"><i><?=$row->name_class?></i></td>
                           
                                <td width="300px"><i><?= $row->birthday?></i><hr></td>
                                <td width="200px" ><i><?= $row->name_gender?></i></td>
                                <td width="200px" ><i><?= $row->information?></i></td>
                               <td width="300px" ><i>
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id?>">Sửa</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Xóa</a>
                    </i></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>