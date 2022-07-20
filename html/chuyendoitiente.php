
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
    <table>
        <tr>
            <td colspan="2" align="center">
            <?php
if (  $_SERVER['REQUEST_METHOD'] == 'POST'){
    $tien = $_POST['tien'];
   $tiente = $_POST['tiente'];

    switch ($tiente) {
        case 'VNĐ':
            echo "Thành tiền : ". ($tien / 23000)." USD";
        break;
        case 'USD':
            echo "Kết quả : ". ($tien * 23000)." VNĐ";
        break;
    }
   } 
    
 
 ?>
 
            </td>
        </tr>
        <form action="" method="post">
        <tr>
<td>
Nhập số tiền
</td>
<td>
<input type="number" name="tien" placeholder="nhập số tiền"><br>
</td>
        </tr>
        <tr>
        <td>
   Chuyển đổi
        </td>
<td>
<select name="tiente" id="">
        <option name="vnd" value="VNĐ">VNĐ to USD</option>
        <option name="usd" value="USD">USD to VNĐ</option>
    </select><br>
</td>
        </tr>
        </tr>
        <tr>
        <td></td>
<td>  <input type="submit" name="submit" id="submit" value="Kiểm tra"></td>
        </tr>
    </form>
    </table>
</body>
</html>