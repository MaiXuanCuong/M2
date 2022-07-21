<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aecho {
            color : red; 
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="So1" placeholder="nhập số thứ nhất" >
        <input type="text" name="So2" placeholder="nhập số thứ hai" >
        <input type="submit" nam="submit" value="Tính">
    </form>
    <?php
if (  $_SERVER['REQUEST_METHOD'] == 'POST'){

    $x = $_POST['So1'];
   $y = $_POST['So2'];
//    if (($x != "" && $y != "")){
function calculate($x1,$y1){
    try {
       
        // if ((isEm($x1))) throw new Exception("STN: Vui lòng nhập số khác 0");
        if(!(is_numeric($x1))) throw new Exception("Vui lòng nhập số");

        if(!(is_numeric($y1))) throw new Exception("Vui lòng nhập số");
    //    if ((is_numeric($y1))) throw new Exception("STH: Vui lòng nhập số khác 0");
    } catch (Exception $e) {
       echo " lỖi :".  $e->getMessage();
       die();
    }
    
   
    $cong = $x1 + $y1;
    echo $x1." + ".$y1.' = '.$cong;
   echo '<br>';
  $tru = $x1 - $y1;
   echo $x1." - ".$y1.' = '.$tru;
   echo '<br>';
    $nhan = $x1 * $y1;
   echo $x1." * ".$y1.' = '.$nhan;
   echo '<br>';
   if ($y1 !=0){
   $chia = $x1 / $y1;
    echo $x1." / ".$y1.' = '.$chia;
   } else{
    echo 'Số '.$x1.' không thể chia cho '.$y1;
   }
   
}
calculate($x,$y);}
else {
    echo 'Hãy nhập số';
}
?>
</body>
</html> 

