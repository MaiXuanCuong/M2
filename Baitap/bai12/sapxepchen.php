<?php
function insertionSort($list,$count){
        for ($i = 1 ; $i < $count ; $i++){
        $j = $i -1;
        $temp = $list[$i];
        while ($j>=0 && $temp > $list[$j] ){
            $list[$j+1] = $list[$j];
            $j--;
        }
            $list[$j+1]= $temp;
    }
            return $list;
}
$list = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
$count = count($list);
echo "<pre>";
print_r($list);
echo "<pre>";
print_r(insertionSort($list,$count));
?>

