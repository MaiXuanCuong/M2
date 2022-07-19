<?php

 if (  $_SERVER['REQUEST_METHOD'] == 'POST'){
    $AGE = $_POST['AGE'];
  if ( $AGE >= 18){
    echo " Được uống bia";
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
</head>
<body>
    <form action="" method="post">
     AGE: <input type="number" name="AGE" id=""> <br><br>
        <input type="submit" value="Kiểm Tra">
    </form>
</body>
</html>