<?php
// $books = ['văn','sử','địa'];
// $temp = $books[0];
// $books[0]= $books[1];
// $books[1]= $temp;

// echo "<pre>";
// print_r($books);



// sắp xếp nổi bọt 




// $array = [6,5,8,34,22,40,11,44,18,23];
// $count = count($array);
// echo "<pre>";
// print_r($array);
// for ($i=0; $i<$count; $i++){
//     for ($j = $count -1; $j > $i ; $j--){
//         if ($array[$j] < $array[$j-1]){
//             $temp = $array[$j-1];
//             $array[$j-1]= $array[$j];
//             $array[$j]= $temp;
//         }
//     }
// }
// echo "<pre>";
// print_r($array);


// sắp xếp chèn

$array = [6,5,8,34,22,40,11,44,18,23];
$count = count($array);
echo "<pre>";
print_r($array);
 for ($i = 1; $i <count($array); $i++){
    $j = $i-1;
    $temp = $array[$i];
    while ($temp < $array[$j] && $j>0){
        $array[$j+1]= $array[$j];
        $j--;
    }
    $array[$j+1]= $temp;
 }
echo "<pre>";
print_r($array);



 // sắp xếp chọn




// $array = [6,5,8,34,22,40,11,44,18,23];
// $count = count($array);
// echo "<pre>";
// print_r($array);

// for ($i = 0 ; $i < $count; $i++) {
//     $min = $i;
//     for ($j= $i+1; $j < $count; $j ++){
//         if ($array[$j] < $array[$min]){
//             $min = $j;
//         }
//     }
// if ($min != $i){
//     $temp = $array[$min];
//     $array[$min]=$array[$i];
//     $array[$i]= $temp;
// }
// }
// echo "<pre>";
// print_r($array);

?>