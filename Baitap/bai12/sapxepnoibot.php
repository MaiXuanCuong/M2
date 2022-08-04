<?php
function bubbleSort($list,$count){
for ($i= 0; $i < $count ; $i++){
        for ($j= $count -1; $j > $i; $j--){
            if ($list[$j] < $list[$j-1]){
                $temp = $list[$j-1];
                $list[$j-1] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
            return $list;
}

$list =  [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$count = count($list);
echo "<pre>";
print_r($list);
echo "<pre>";
print_r(bubbleSort($list,$count));


?>