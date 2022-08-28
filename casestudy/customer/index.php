<?php include_once "./../layout/header.php";
include_once "../database.php";
?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;
$sql = "SELECT * FROM customer ";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <!-- <main> -->
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Customer</h2>
                <a class="btn btn-success" href="add.php">Add Customer</a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td width="170px"><?=$key + 1 ?></td>
                                <td><?=$row->name_customer?></td>
                                <td><?=$row->gender_customer?></td>
                                <td><?=$row->address_customer?></td>
                                <td><?=$row->phone_customer?></td>
                               <td width="250px" >
                                    <a class="btn btn-success" href="edit.php?id=<?=$row->id_customer?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_customer?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
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