<?php
$mang1 =[1,2,3,4,5,6,7,8,9,10,11,12,13];
$mang2 =[14,15,16,17,18,19,20,21,22];
$mang3 =[];
 foreach ($mang1 as $key => $value) {
    array_push($mang3, $value);
 }
 foreach ($mang2 as $key1 => $value1) {
   array_push($mang3, $value1);
 }
 echo '<pre>';
 print_r($mang3);
echo '</pre>';



?>