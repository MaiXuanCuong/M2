<?php
$matrix = 
[[0, 1, 1, 2],
 [0, 5, 0, 0],
 [2, 0, 3, 3]];
 function matrixElementsSum($matrix){
    $s = 0;
    for ($i = 0 ; $i < count($matrix) ; $i++){
        for ($j = 0 ; $j < count($matrix[$i]) ; $j++){
            if ($matrix[$i][$j] == 0 && $i + 1 < count($matrix)){
                $matrix[$i+1][$j] = 0;
            } else {
                $s += $matrix[$i][$j];
            }
        }
    }
    return $s;
 };
 echo matrixElementsSum($matrix);
?>
