<?php

$songuyen = [3,3,1,4,46,86,9];
$min= $songuyen[0];
$index =0;

echo 'Mảng số [';
foreach ($songuyen as $key => $value){
   if ($value < $min){
    $min=$value;
    $index = $key;
   
   }
 
   echo $value .", ";
   
 
}
echo ']';

echo "<br>";
echo 'Số nhỏ nhất là : ' .$min." tại vị trí ".($index+1);




?>