<?php include_once "../layout/header.php";
include_once "../layout/sidebar.php";
include_once "../database.php";?>
<?php 
$sql = "SELECT books.name_book, categories.name_category, books.price FROM `books` 
JOIN categories 
ON books.category_id = categories.id_category";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();
// print_r ($rows);
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h2 class="mt-4">LIBRARY</h2>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Book</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <?php if(isset($rows)) :?>
                    <?php foreach ($rows as $key => $row) { ?>
                       
                        <tbody>
                            <tr>
                                <td><?=$key +1 ?></td>
                                <td><?=$row->name_book?></td>
                                <td><?=$row->name_category?></td>
                                <td><?=number_format($row->price)." VNĐ"?></td>
                             
                            </tr>
                        </tbody>
                    <?php } ?>
                    <?php else : echo ''; endif ;?>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include_once "../layout/footer.php";?>




