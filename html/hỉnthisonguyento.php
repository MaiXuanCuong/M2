
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
<h2>Số nguyên tố</h2>
<form method="post">
    <input type="number" name="songuyento" placeholder="Nhập số lượng số nguyên tố"/><br>
    <input type="submit" id="submit" value="Tìm"/>
</form>
<tbody>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $songuyento = $_POST["songuyento"];
    if ($songuyento != "" ){
        $dem =0;
       for ($i = 2; $i < $songuyento; $i++){
        for ($j = 1; $j <= $i; $j++){
            if ($i % $j == 0){
            $dem++;}
        }
        if ($dem ==2){
            echo $i.' ';
          
        }
        $dem = 0;
  
       }
       
    }
  
}
?>
</tbody>
</body>
</html>