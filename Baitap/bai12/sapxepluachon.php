<?php

function selectionSort($list,$count){
    for ($i = 0; $i < $count; $i++){
        $min = $i;
        for ($j = $i+1; $j < $count; $j++){
            if ($list[$j] < $list[$min]){
                $min = $j;
            }
    
        }
        if ($min != $i){
            $temp = $list[$min];
            $list[$min] = $list[$i];
            $list[$i] = $temp;
        }
    
    }
    return $list;
}
$list = [1, 9, 4.5, 6.6, 5.7, -4.5];
$count = count($list);
echo "<pre>";
print_r($list);

echo "<pre>";
print_r(selectionSort($list,$count));


?>
