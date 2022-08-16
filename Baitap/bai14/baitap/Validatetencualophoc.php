<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tenlop = $_POST['tenlop'];

$pattern = '/^[CAP]{1,1}[0-9]{4,4}[GHIKLM]{1,1}$/';
// $tenlop = 'C0318G';
if (preg_match($pattern, $tenlop, $matches)) {
    echo 'Tên hợp lệ: '.$tenlop;
} else {
    echo 'Tên không hợp lệ: '.$tenlop;
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
        input[type="text"]
{
    width: 300px;     
}    </style>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Nhập tên lớp</td>
                <td><input type="text" name="tenlop" placeholder="Đầu'CPA' Giữa'4 số' Cuối'GHIKLM' VD:C0318G"></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" value="Kiểm Tra"></td>
            </tr>
        </table>
        
       
    </form>
</body>
</html>