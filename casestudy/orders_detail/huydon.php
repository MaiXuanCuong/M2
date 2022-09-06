<?php

include_once "../database.php";?>
<?php

if(isset($_REQUEST['id']) && isset($_REQUEST['id1'])){
    $id3 = $_REQUEST['id1'];
    $id4 = $_REQUEST['id'];
  
        $sql1 = "SELECT year(date_borrow) AS year, month(date_borrow) AS month, day(date_borrow) AS day, hour(date_borrow) AS hour, minute(date_borrow) AS minute, orders_detail.* FROM `orders_detail` 
        JOIN product 
        ON product.id_product = orders_detail.product_id 
        JOIN order_product 
        ON orders_detail.order_product_id = order_product.id_order_product 
        JOIN customer 
        ON order_product.customer_id = customer.id_customer
        JOIN categories 
        ON product.category_id = categories.id_category 
        WHERE customer.id_customer = $id3 AND orders_detail.id_orders_detail =  $id4 ";
    $stmt1 = $conn->query($sql1);
    $stmt1->setFetchMode(PDO::FETCH_OBJ);
    $rows1 = $stmt1->fetch();
   
    if(isset($rows1) && ($rows1 == NULL)) {
        header('location:index1.php');
    }
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $year = date("Y");
   
    $month = date("m");
  
    $day = date("d");
    $hour = date("H");
    $minute = date("i");

    if(($year - $rows1->year == 0) && ($month - $rows1->month == 0) && ($day - $rows1->day == 0) && ($hour - $rows1->hour == 0 ) && ($minute - $rows1->minute <= 10 ) ){

    $sql2 = "SELECT * FROM `orders_detail` JOIN `order_product` ON orders_detail.order_product_id = order_product.id_order_product WHERE `id_orders_detail` = $id4 ";
    $stmt2 = $conn->query($sql2);
    $stmt2->setFetchMode(PDO::FETCH_OBJ);
    $rows2 = $stmt2->fetch();
    $prd_id = $rows2->product_id;

    $sql6 = "SELECT * FROM `product` WHERE `id_product` = $prd_id ";
    $stmt6 = $conn->query($sql6);
    $stmt6->setFetchMode(PDO::FETCH_OBJ);
    $rows6 = $stmt6->fetch();

    $quantity_alter = $rows2->quantity_order + $rows6->quantity;
    $id2 =$rows2->order_product_id;
        $sql = "DELETE FROM `orders_detail` WHERE `id_orders_detail` = $id4";
        $conn->exec($sql);
        $sql4 = "DELETE FROM order_product WHERE id_order_product = $id2";
        $conn->exec($sql4);

        $sql5 = "UPDATE product SET `quantity` = $quantity_alter WHERE id_product = $prd_id ";
        $conn->query($sql5);
        header('location:index1.php');
 }
 header('location:index1.php');

}     