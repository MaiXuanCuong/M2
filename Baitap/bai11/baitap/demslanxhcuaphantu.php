<?php
 function countOccurrences($arr,$value){
    $number = $arr;
    $value = $value;
    $count = 0;
    for ($i=0;$i<count($number) ;$i++){
        if ($value == $number[$i]){
            $count++;
        }
    }
    return $count;
 }
    $arr = [3,3,3,3,5,5,66,3,3,1,42,56];
    $value = 3;
    $Count = countOccurrences($arr, $value);
    echo "Số ".$value." Xuất hiện ".$Count." trong mảng ";


?>