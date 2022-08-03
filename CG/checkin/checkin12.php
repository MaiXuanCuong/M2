<?php
$string = "A,B,C,D,E,F,G,H,I,J,K,L,M";
$arr = explode(",", $string);
$find = "J";

foreach ($arr as $key => $value) {
    if ($value == $find) {
        echo $value." tại vị trí ".$key;
        break;
    }
    else if ($value != $find && $key == count($arr) -1) {
        echo "Không tìm thấy ".$find." trong mảng";
    }
}




?>