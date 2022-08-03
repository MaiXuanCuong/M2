<?php
// tìm keiesm tuyến tính
// $string = "A,B,C,D,E,F,G,H,I,J,K,L,M";
// $arr = explode(",", $string);
// $find = "J";

// foreach ($arr as $key => $value) {
//     if ($value == $find) {
//         echo $value." tại vị trí ".$key;
//         break;
//     }
//     else if ($value != $find && $key == count($arr) -1) {
//         echo "Không tìm thấy ".$find." trong mảng";
//     }
// }

// tìm kiếm nhị phân

function searchNumber($arr1,$x){
   
    $left = 0;
    $right = count($arr1)-1;
    while ($left <= $right){
        $mid =floor(($left + $right)/2);
        if ($arr1[$mid] == $x){
            return $mid;
        } else if ($arr1[$mid] > $x){
             $right = $mid -1;
        } else if ($arr1[$mid] < $x){
            $left = $mid + 1;
        } else {
            echo "Số ".$x." Không tồn tại trong mảng";
        }
    }
}
$arr1 =[1,2,3,4,5,6,7,8,9];
$x=8;
$search = searchNumber($arr1,$x);
echo $arr1[$search].' Tại vị trí '.$search;
?>