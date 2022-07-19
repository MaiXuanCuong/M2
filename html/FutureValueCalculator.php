<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $dautu = $_POST["dautu"];
    $laisuat = $_POST["laisuat"];
    $sonam = $_POST["sonam"];
    $lailoi = $dautu + ($dautu * $laisuat*0.01);
    echo "Gía trị tương lai là : $lailoi VNĐ";
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
<h2>Đầu tư </h2>
<form method="post">
    <input type="text" name="dautu" placeholder="Nhập số tiền đầu tư"/>
    <input type="text" name="laisuat" placeholder="Nhập lãi suất"/>
    <input type="text" name="sonam" placeholder="Nhập số năm"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>