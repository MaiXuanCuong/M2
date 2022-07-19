<?php
if (  $_SERVER['REQUEST_METHOD'] == 'POST'){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
   $pheptinh = $_POST['pheptinh'];
   if (!($number1 == "" && $number2 == "")){
    switch ($pheptinh) {
        case 'cong':
            echo "Kết quả : ". $number1 + $number2;
        break;
        case 'tru':
            echo "Kết quả : ". $number1 - $number2;
        break;
        case 'nhan':
            echo "Kết quả : ". $number1 * $number2;
        break;
        case 'chia':
            if ($number2 != 0){
                echo "Kết quả : ". $number1 / $number2;
            } else {
                echo "không được phép chia cho số 0";
            }
           
        break;
    }
   } else {
    echo " vui lòng nhập số";
   }
    
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=number] ,
        select{
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
    <form action="" method="post">
    <input type="number" name="number1" placeholder="nhập số thứ nhất"><br>
    <select name="pheptinh" id="">
        <option name="cong" value="cong">+</option>
        <option name="tru"  value="tru">-</option>
        <option name="nhan" value="nhan">*</option>
        <option name="chia" value="chia">/</option>
    </select><br>
    <input type="number" name="number2" placeholder="nhập số thứ hai"> <br>
    <input type="submit" name="submit" id="submit" value="Kiểm tra">
    </form>
</body>
</html>