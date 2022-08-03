<?php
function findMin($arr){
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];}
    }
    return $min;
}
$number = [4,6,-1,45,-9,452,5,2,23,5];
foreach ($number as $key => $value){
    echo $value." ";
}
$minValue = findMin($number);
echo "<br>";
echo "Số nhỏ nhất là ".$minValue;



?>
