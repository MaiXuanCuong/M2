<?php
$array = [1, 9, 4.5, 6.6, 5.7, -4.5];
$count = count($array);
echo "<pre>";
print_r($array);
for ($i = 0; $i < $count; $i++){
    $min = $i;
    for ($j = $i+1; $j < $count; $j++){
        if ($array[$j] < $array[$min]){
            $min = $j;
        }

    }
    if ($min != $i){
        $temp = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $temp;
    }

}
echo "<pre>";
print_r($array);


?>
