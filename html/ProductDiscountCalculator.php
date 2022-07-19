<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $mota = $_POST["mota"];
    $gianiemyet = $_POST["gianiemyet"];
    $chietkhau = $_POST["chietkhau"];
    if (!($mota == "" && $gianiemyet== "" && $chietkhau== "")) {
        $giamgia = $gianiemyet * $chietkhau * 0.01;
       echo "Sản phẩm : $mota".'<br>';
        echo "Được giảm giá : $chietkhau % tương đương $giamgia  VNĐ".'<br>';
        echo "Số tiền phải thanh toán là ".($gianiemyet - $giamgia)." VNĐ";
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Sale sập sàn</h2>
<form method="post">
    <input type="text" name="mota" placeholder="Nhập mô tả sản phẩm"/><br>
    <input type="text" name="gianiemyet" placeholder="Nhập giá niêm yết"/><br>
    <input type="text" name="chietkhau"placeholder="Nhập số phần trăm chiết khấu"/><br>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>