<?php 
include_once "../database.php";
include_once "./../layout/header.php";

?>
<?php include_once "./../layout/sidebar.php";?>
<?php 
global $conn;
$sql = "SELECT * FROM customer WHERE role = 'User'";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// print_r ($rows);
?>
<!-- <div id="layoutSidenav"> -->
    <!-- <div id="layoutSidenav_content"> -->
        <!-- <main> -->
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
        
    <div class="row">
   
            <div class="col-xl-12">
            <h2 class="mt-4"><i>Khách Hàng</h2>
                <!-- <a class="btn btn-success" href="add.php"><i>Thêm Khách Hàng</a> -->
                <a class="btn btn-success" href="../index/index.php"><i>Trở Về</i></a>
                    <div class="card mb-4">
                        <div  style="text-align: center" class="card-header">
                <div class="container-fluid px-4">
        
            <div class="container-fluid px-4">
               
                <table >
                    <thead class="thead-dark">
                        <tr>
                            <th width="100px" ><i>STT</i></th>
                            <th width="300px" ><i>Tên</i></th>
                            <th width="100px" ><i>Giới Tính</i></th>
                            <th width="750px"><i>Địa Chỉ</i></th>
                            <th width="180px"><i>Số Điện Thoại</i></th>
                            <!-- <th scope="col"><i>Thao Tác</i></th> -->
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                        <tbody>
                            <tr>
                                <td ><?=$key + 1 ?></i></td>
                                <td><i><?=$row->name_customer?></i></td>
                                <td><i><?=$row->gender_customer?></i></td>
                                <td><i><?=$row->address_customer?></i></td>
                                <td><i><?=$row->phone_customer?></i><br> <br></td>
                               <!-- <td width="250px" > -->
                                    <!-- <a class="btn btn-success" href="edit.php?id=<?php //$row->id_customer?>"><i>Sửa</i></a> -->
                                    <!-- <a class="btn btn-danger" href="delete.php?id=<?php //$row->id_customer?>" onclick="return confirm('Bạn có chắc muốn xóa không?');"><i>Xóa</i></a> -->
                                <!-- </td> -->
                                
                            </tr>
                           
                        </tbody>
                        
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include_once "./../layout/footer.php";?>