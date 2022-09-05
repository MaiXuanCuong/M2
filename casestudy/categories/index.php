<?php
include_once "../database.php";

 include_once "./../layout/header.php";
?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;
$sql = "SELECT * FROM categories ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
?>
<div  id="layoutSidenav" >
    <div id="layoutSidenav_content">
        <main >

            <div class="container-fluid px-4">
                
                <h2 class="mt-4"><i>Thể Loại</i></h2>
                <a class="btn btn-primary" href="../index/index.php"><i>Trở Về</i></a>
                <a class="btn btn-success" href="add.php"><i>Thêm Thể Loại</i></a>
                <div class="row">
        <div class="col-xl-12">
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
                <table >
                    <thead style="text-align:center;" class="thead-dark">
                        <tr >
                            <th width="500px" ><i>STT</i><hr></th>
                            <th width="500px" ><i>Tên Thể Loại</i><hr></th>
                            <th width="500px" ><i>Thao Tác</i><hr></th>
                        </tr>
                    </thead>
                    <?php if(isset($rows)) :?>
                    <?php foreach ($rows as $key => $row) { ?>
                       
                        <tbody>
                            <tr>
                                <td style="text-align:center;" width="170px"><i><?=$key + 1 ?></i><hr></td>
                                <td style="text-align:center;"><i><?=$row->name_category?></i><hr></td>
                               <td style="text-align:center;"  width="250px" ><i>
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id_category?>">Sửa</a> |
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_category?>" onclick="return confirm('Bạn có chắc muốn xóa <?=$row->name_category?> không?');">Xóa</a>
                    </i></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <?php else : echo ''; endif; ?>
                </table>
      
        </main>
    </div>
</div>
</div>
</div>

<?php include_once "./../layout/footer.php";?>