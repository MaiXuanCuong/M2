<?php
function timgiatrinhonhat($a){
    $songuyen1 = $a;
    $min= $songuyen1[0];
    $index =0;
    
    echo 'Mảng số [';
    foreach ($songuyen1 as $key => $value){
       if ($value < $min){
        $min=$value;
        $index = $key;
       
       }
     
       echo $value .", ";
       
     
    }
    echo ']';
    
    echo "<br>";
    echo 'Số nhỏ nhất là : ' .$min." tại vị trí ".($index+1);
}
$songuyen = [3,3,1,4,46,86,9];

timgiatrinhonhat($songuyen);



?>