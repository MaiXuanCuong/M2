<?php include_once "./../layout/header.php";
include_once "../database.php";
?>
<?php include_once "./../layout/sidebar.php";?>

<?php 

global $conn;
$sql = "SELECT students.id , students.name_students, students.class, students.address, students.phone, books.name, categories.name_category, books.price, orders_detail.quantity, orders_detail.total_price ,orders_book.date_borrow, orders_book.date_pay FROM `orders_detail` 
JOIN books 
ON books.id = orders_detail.book_id 
JOIN orders_book 
ON orders_detail.orders_book_id = orders_book.id 
JOIN students 
ON orders_book.student_id = students.id 
JOIN categories 
ON books.category_id = categories.id";
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
                <h2 class="mt-4">Order</h2>
                <a class="btn btn-success" href="add.php">Order</a>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Book</th>
                            <th scope="col">Category</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($rows as $key => $row) { ?>
                       
                        <tbody>
                            <tr>
                                <td width="170px"><?=$row->id?></td>
                                <td><?=$row->name_students?></td>
                                <td><?=$row->name?></td>
                                <td><?=$row->name_category?></td>
                                <td><?=$row->quantity?></td>    
                               <td width="250px" >
                                    <!-- <a class="btn btn-success" href="edit.php?id=<?=$row->id?>">Edit</a> -->
                                    <a class="btn btn-success" href="../order_detail/index.php?id=<?=$row->id?>">Show</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
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



