
<?php include_once "./../layout/header.php";
include_once "../database.php";
?>
<?php include_once "./../layout/sidebar.php";?>

<?php 
global $conn;
$sql = "SELECT * FROM students ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
// print_r ($rows);
?>
<!-- <a href="add.php">Add</a> -->



<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Students</h2>
                <a class="btn btn-success" href="add.php">Add Students</a>
                
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                       
                        <tbody>
                            <tr>
                                <td width="170px"><?=$key + 1 ?></td>
                                <td><?=$row->name_student?></td>
                                <td><?=$row->class?></td>
                                <td><?=$row->address?></td>
                                <td><?=$row->phone?></td>
                               <td width="250px" >
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id_student?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_student?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include_once "./../layout/footer.php";?>

