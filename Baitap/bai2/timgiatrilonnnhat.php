<?php

$songuyen = [[3,2,1,3],
[4,5,2,4]];
$max = $songuyen[0][0];
 foreach ($songuyen as $key => $value){
    foreach ($value as $value1){
        if ($value1> $max){
            $max = $value1 ;
         
        }
        ;
    }
 }
echo '<pre>';
print_r($songuyen);
echo '</pre>';
echo '<br>';
echo "Giá trị lớn nhất là : ".$max;



?>

 