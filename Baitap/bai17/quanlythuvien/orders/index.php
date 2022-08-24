<?php include_once "./../layout/header.php";
include_once "../database.php";
?>
<?php include_once "./../layout/sidebar.php";?>

<?php 
global $conn;
$sql = "SELECT  orders_detail.id_order_detail, students.id_student ,orders_detail.order_book_id , students.name_student,
 students.class, students.address, students.phone,
books.name_book, categories.name_category, books.price,
 orders_detail.quantity, orders_detail.total_price ,
 orders_books.date_borrow, orders_books.id_order_book ,orders_books.date_pay FROM `orders_books` 
JOIN orders_detail
ON orders_detail.order_book_id = orders_books.id_order_book 
JOIN books 
ON books.id_book = orders_detail.book_id 
JOIN students 
ON orders_books.student_id = students.id_student 
JOIN categories 
ON books.category_id = categories.id_category";

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
// echo '<pre>';
// print_r ($rows);

?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">Order</h2>
                <a class="btn btn-success" href="add.php">Order</a>
                <a class="btn btn-danger" href="deleteall.php" onclick="return confirm('Bạn có chắc muốn xóa tất cả không?');">Delete ALL</a>
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
                                <td width="170px"><?=$row->id_student?></td>
                                <td><?=$row->name_student?></td>
                                <td><?=$row->name_book?></td>
                                <td><?=$row->name_category?></td>
                                <td><?=$row->quantity?></td>    
                               <td width="250px" >
                                    <a class="btn btn-success" href="../order_detail/index.php?id=<?=$row->id_order_book?>">Show</a>
                                    <?php $sql4 = "SELECT id_order_book FROM `orders_books`";
                                        $stmt4 = $conn->query($sql4);
                                        $stmt4->setFetchMode(PDO::FETCH_OBJ);
                                        $rows4 = $stmt4->fetchAll();
                                        $max=0;
                                        foreach ($rows4 as $key0 => $row0){
                                            if($row0->id_order_book == $row->id_order_detail){
                                                $max =$row0->id_order_book;
                                            }
                                        } ?>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id_order_detail?>&id1=<?=$max?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete></a>
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



