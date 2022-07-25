<?php
$chuoi = "chuoichin";
$C = 'c';
$count =0;
for ($i = 0; $i < strlen($chuoi); $i++){
    if ($chuoi[$i] == $C){
        $count++;
    }

}
echo $count;



?>