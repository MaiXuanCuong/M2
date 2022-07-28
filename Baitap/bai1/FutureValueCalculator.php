<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $dautu = $_POST["dautu"];
    $laisuat = $_POST["laisuat"];
    $sonam = $_POST["sonam"];
    if (!($dautu == "" && $laisuat== "")){
        $lailoi = $dautu + ($dautu * $laisuat*0.01) * $sonam;
        echo "Gía trị tương lai là : $lailoi VNĐ";
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document</title>
    <style>
        input[type=number] {
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
<h2>Đầu tư </h2>
<form method="post">
    <input type="number" name="dautu" placeholder="Nhập số tiền đầu tư"/><br>
    <input type="number" name="laisuat" placeholder="Nhập lãi suất"/><br>
    <input type="number" name="sonam" value="1" placeholder="Nhập số năm"/><br>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>