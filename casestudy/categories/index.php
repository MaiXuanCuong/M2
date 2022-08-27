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
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Thể Loại</h2>
                <a class="btn btn-success" href="add.php">Thêm Thể Loại</a>
                
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Thể Loại</th>
                            <th scope="col">Thao Tác</th>
                        </tr>
                    </thead>
                    <?php if(isset($rows)) :?>
                    <?php foreach ($rows as $key => $row) { ?>
                       
                        <tbody>
                            <tr>
                                <td width="170px"><?=$key + 1 ?></td>
                                <td><?=$row->name_category?></td>
                               <td width="250px" >
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id_category?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_category?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                    <?php else : echo ''; endif; ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include_once "./../layout/footer.php";?>