<?php include_once "./../layout/header.php";
include_once "../database.php";
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
                <h2 class="mt-4">Thể Loại</h2>
                <a class="btn btn-success" href="add.php">Thêm Thể Loại</a>
                <div class="row">
        <div class="col-xl-12">
                <div class="card mb-4">
                    <div  style="text-align: center" class="card-header">
                <table  class="table table-bordered">
                    <thead style="text-align:center;" class="thead-dark">
                        <tr >
                            <th width="500px" >STT</th>
                            <th width="500px" >Tên Thể Loại</th>
                            <th width="500px" >Thao Tác</th>
                        </tr>
                    </thead>
                    <?php if(isset($rows)) :?>
                    <?php foreach ($rows as $key => $row) { ?>
                       
                        <tbody>
                            <tr>
                                <td style="text-align:center;" width="170px"><?=$key + 1 ?></td>
                                <td style="text-align:center;"><?=$row->name_category?></td>
                               <td style="text-align:center;"  width="250px" >
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id_category?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_category?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                                </td>
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