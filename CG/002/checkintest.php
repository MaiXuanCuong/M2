<?php

// function insert_first_position( $arr, $element )
// {

// array_unshift($arr,$element);
// return $arr;
// }
// $arr=[3,4,5,6,7];
// $element=2;
// print_r (insert_first_position( $arr, $element ));


// function sort_ascending( $arr, $element )
// {
// //Hoàn thiện function ở đây
// for ($i=0;$i<((int)(count($arr)/2));$i++){
//     $$element = $arr[$i];
//     $arr[$i] = $arr[count($arr)-1-$i];
//     $arr[count($arr)-1-$i] = $$element;
// }
// }
// $msg = 'codegym';
// for($x = 8; $x < strlen ($msg). + 5; $x++)
// {
//     echo $x;
// }
// for($x = 19; $x > 4; $x--)
// {
//     echo $x;
//     break;
// }
$msg = 'codegym';
for($x = 0; $x < strlen($msg). - 1; $x++)
{
    if(strlen($msg == 3))
    {
        for ($i = 2; $i < 7; $i++)
        {
            echo $x;
        }
    }
    else
    {
        for ($i = strlen($msg); $i > (strlen($msg) - 2); $i--)
        {
            echo $i;
        }
    }
}
echo "<br>";
var_dump (strlen($msg). - 1);


