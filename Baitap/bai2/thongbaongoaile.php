<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        input[type=submit]   {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
   
</head>
<body>
<form method="post">
        <input type="text" name="number"><br>
        <input type="submit" value="TÌm kiếm">
</form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $number=$_POST['number'];
            $mang=[];
            for($i=0;$i<101;$i++){
                array_push($mang, $i);
            }
            shuffle($mang);
          
            for($i=0;$i<count($mang);$i++){
                if($number==$mang[$i]){
                    echo $i;
                    break;
                }
                else if($number!=$mang[$i] && $i== (count($mang)-1)){
                    echo "không tồn tại".$number;
    }
        }
        echo "<pre>";
        print_r($mang);
        echo "</pre>";
    }
    ?>
   
</body>
</html>