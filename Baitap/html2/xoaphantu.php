<?php
$so = 4;
$songuyen =[2,34,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
foreach ($songuyen as $key => $value) {
    if ($value == $so) {
        unset($songuyen[$key]);

    }

}
echo '<pre>';
print_r($songuyen);
echo '</pre>';

?>